Dieses Repository enthält ein Beispielprojekt zur Klassifizierung von Diabetes-Patienten mit RubixML in PHP.

Installation


Clone the repository: git clone github.com:Andybabic/Example-PHP-for-machine-learning-RubixML-.git
Install dependencies: composer install

Zunächst müssen Sie sicherstellen, dass Sie RubixML und Tensor in Ihrem PHP-Projekt installiert haben. Sie können dies tun, indem Sie die folgenden Befehle ausführen:

composer require rubix/ml
composer require rubix/tensor


Als nächstes können Sie das folgende Beispiel ausführen, um den Diabetes-Datensatz zu laden, zu analysieren und eine Vorhersage zu treffen:

Daten

Der Datensatz enthält Informationen von 768 Frauen ab 21 Jahren, die auf Anzeichen von Diabetes untersucht wurden. Die verwendeten Variablen sind:

Anzahl der Schwangerschaften
Plasmaglukosekonzentration bei 2 Stunden in einem oralen Glukosetoleranztest
Diastolischer Blutdruck (mm Hg)
Trizepshautfaltendicke (mm)
2-Stunden-Insulin (mu U/ml)
Body-Mass-Index (Gewicht in kg/(Größe in m)^2)
Diabetes Pedigree Function
Alter (Jahre)
Das Ziel ist es, zu bestimmen, ob ein Patient innerhalb von fünf Jahren nach der Untersuchung Diabetes entwickelt hat.

Analyse

Die Analyse umfasst die folgenden Schritte:

Datenvorbereitung: Laden des Datensatzes und Aufteilung in Trainings- und Testdaten.
Feature-Engineering: Skalierung der Daten und Auswahl von Merkmalen.
Modell-Training: Training eines Entscheidungsbaum-Modells.
Modell-Auswertung: Bewertung der Modellleistung auf den Testdaten.
Die genauen Schritte sind in der diabetes_classification.php-Datei beschrieben.

Verwendung von RubixML

RubixML bietet eine Vielzahl von Machine-Learning-Modellen und -Tools, die einfach zu verwenden und anpassbar sind. In diesem Beispiel verwenden wir das Entscheidungsbaum-Modell und die Z-Score-Skalierung.

Das Entscheidungsbaum-Modell ist ein leistungsfähiges Modell für die Klassifikation und Vorhersage, das auf der Verwendung von Entscheidungsbäumen basiert.
Die Z-Score-Skalierung ist eine Methode zur Skalierung von Daten auf eine Standardnormalverteilung mit einem Mittelwert von 0 und einer Standardabweichung von 1.
Referenzen

Rossi, R.A. and Ahmed, N.K. (2015). The Network Data Repository with Interactive Graph Analytics and Visualization. In AAAI, retrieved from https://networkrepository.com in 2023.
RubixML. (n.d.). RubixML - High-Level Machine Learning Library for PHP. https://rubixml.com/
National Institute of Diabetes and Digestive and Kidney Diseases. (n.d.). Diabetes Data Sets. https://www.niddk.nih.gov/about-niddk/research-areas/statistics-research/diabetes-data-sets
