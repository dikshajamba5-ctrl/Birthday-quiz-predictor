# Birthday-quiz-predictorBirthday Predictor Using PHP

1. Project Overview

The Birthday Predictor is a simple PHP-based web application that predicts the user's birth date (from 1 to 31) by asking five Yes/No questions using binary number cards.

The application displays five different cards. Based on the user's answers, it calculates and displays the predicted birthday.

2. Objectives

- To develop a simple web application using PHP.
- To understand the concept of binary numbers.
- To ask five Yes/No questions from the user.
- To predict the user's birthday between 1 and 31.
- To display the final predicted birth date.

3. Requirements

Hardware Requirements

- Chromebook or Computer
- Internet Connection

Software Requirements

- VS Code.dev (Online Code Editor)
- PHP 7.4 or later
- Chromebook Linux Terminal
- Google Chrome or any web browser

4. Technologies Used

- PHP: Used for application logic and birthday calculation.
- HTML: Used to create the structure of web pages.
- CSS: Used for designing and styling the application.
- PHP Sessions: Used to store answers and maintain progress between questions.

5. Project Structure

Birthday_Predictor/
│
└── index.php

6. Working of the Project

The application works on the concept of binary numbers.

It asks five Yes/No questions. Each question displays a different binary number card.

The five binary values are:

Question| Binary Value
Question 1| 1
Question 2| 2
Question 3| 4
Question 4| 8
Question 5| 16

If the user selects YES, the corresponding binary value is added to the birthday total.

If the user selects NO, the value is not added.

After all five questions, the application calculates and displays the predicted birthday.

7. How to Run the Project

1. Open the project folder in VS Code.dev.
2. Save the PHP file as "index.php".
3. Open Chromebook Linux Terminal.
4. Navigate to the project folder.
5. Run the following command:

php -S localhost:8000

6. Open Google Chrome.
7. Enter the following URL:

http://localhost:8000/index.php

8. Answer all five Yes/No questions to see the predicted birthday.

8. Expected Output

The application displays:

- A welcome page titled Birthday Predictor.
- Five Yes/No question cards.
- Binary numbers on each card.
- A final page showing the predicted birthday.
- A Try Again button to restart the application.

Sample Output

Birthday Predictor

Question 1 of 5
Is your birthday present in this card?

[ YES ]   [ NO ]

...

Your Birthday is:

15

Thank You!

9. Conclusion

The Birthday Predictor project demonstrates the practical use of binary numbers in a PHP web application.

By answering five simple Yes/No questions, the application successfully predicts the user's birth date between 1 and 31.

This project helps in understanding PHP programming, HTML, CSS, sessions, and binary number calculations.

---

Project Name: Birthday Predictor Using PHP
Main File: index.php