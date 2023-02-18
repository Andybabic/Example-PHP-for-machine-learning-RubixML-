require_once 'vendor/autoload.php';

use Rubix\ML\Datasets\Labeled;
use Rubix\ML\Transformers\ZScaleStandardizer;
use Rubix\ML\Classifiers\KNearestNeighbors;
use Rubix\ML\CrossValidation\Metrics\Accuracy;
use Rubix\ML\CrossValidation\StratifiedKFold;
use Rubix\ML\Persisters\Filesystem;
use Rubix\ML\Pipeline;

// Laden des Diabetes-Datensatzes aus einer CSV-Datei
$dataset = Labeled::fromIterator(new \ArrayIterator(
    array_map('str_getcsv', file('diabetes.csv'))
));

// Trennen des Datensatzes in Trainings- und Testdaten
$stratifier = new StratifiedKFold(10);

[$training, $testing] = $stratifier->split($dataset);

// Erstellen einer Pipeline, die den Datensatz standardisiert und dann eine k-NN-Klassifikator anwendet
$pipeline = new Pipeline([
    new ZScaleStandardizer(),
    new KNearestNeighbors(3),
]);

// Trainieren der Pipeline auf dem Trainingsdatensatz
$pipeline->train($training);

// Vorhersage der Klassen auf dem Testdatensatz
$predictions = $pipeline->predict($testing);

// Evaluieren der Vorhersagegenauigkeit
$metric = new Accuracy();

$score = $metric->score($predictions, $testing->labels());

echo "Accuracy: $score\n";

// Speichern des Modells auf die Festplatte
$persister = new Filesystem('diabetes_model.rbx');

$persister->save($pipeline);
