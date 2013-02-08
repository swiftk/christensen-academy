#Test 1

The content covered on this test includes the following topics:

1. Primitive Data Types
2. Strings, concatenation, and printing out messages
3. Scanners for basic user input
4. Comments
5. Math Expressions and Casting


##True or False

1. True or False (Circle One): There are two ways to write comments in Java.
2. True or False (Circle One): The statement `int x = 10.0;` would result in a syntax error.
3. True or False (Circle One): The statement `double x = 10;` would result in a syntax error.
4. True or False (Circle One): A comment that starts with `/*` must be ended with `*/`.
5. True or False (Circle One): An error that occurs while a program is running is referred to as a "compile-time" error.
6. True or False (Circle One): In Java, `x = 10` and `10 = x` are equivalent statements.
7. True or False (Circle One): There are eight primitive data types in Java.
8. True or False (Circle One): `10`, `'c'`, `"Hello World"`, and `2.45` are all examples of literals in Java.
9. True or False (Circle One): When naming variables, they should always start with a lowercase letter unless they are constants, in which case they should be written in all capital letters.
10. True of False (Circle One): The `+` operator in Java is always used for adding numbers together.

##Short Answer
1. Describe the three types of errors in Java.
2. What is a variable in programming?

##Math Expressions

Evaluate the following math expressions:

1. 4+5*2;
2. (15/(3+4))*2.0;
3. 8/3+4.2;
4. 19%3*5;
5. (int)(7/2.0)+2.2;

##Coding Challenges
Write a program by hand for each of the following problems. You will be graded on syntax and the correctness of your program.

1. Write a program that has a user enter their age in Earth years then outputs their age in Martian years. There are 686.98 Earth days in a Martian year, and there are 365.2564 Earth days in an Earth year. Format the output message as follows: "Your age in Martian years is x!", where "x" is replaced by the actual value the program calculated.
2. Write a program that has the user to enter the number of hours they worked this week. They should earn 20 dollars per hour for the first 40 hours of work, and 30 dollars for each hour beyond 40 that they worked. Format the output as follows: "You earned $x this week for working $y hours.", where "x" is replaced by the amount of money they earned, and "y" is replaced by the number of hours they worked.
3. Write a program that has the user to enter their age then outputs their max heart rate according to the following formula: 208-(0.7*age). Format the output of the program as follows: "Your maximum heart rate is x.", where "x" is the calculated value of their maximum heart rate.
4. You're hosting Thanksgiving dinner for your extended family, and you know that the absolute minimum amount of turkey you'll need is one full turkey per 7 people; so, 14 people could get by on 2 turkeys, but 15 people would need 3 turkeys. Write a program that has the user enter the number of people attending Thanksgiving dinner and outputs the number of turkeys needed. The output should be formatted as follows: "Buy x turkeys!", where "x" is the calculated number of turkeys needed.

##Debugging Challenge

Spot 5 syntax erros in the following code by circling them and providing a quick phrase explaining what's wrong. There are actually 6 errors, and if you spot all 6, that's a bonus for you!

Additionally, you should spot one part of the code that could potentially result in a runtime error.

Lastly, you need to spot one logic error.

```
import java.util.scanner;

public class example {
  public static void main(String[] args){
    Scanner sc = new Scanner();
    System.out.println("Please enter the number of siblings you have.);
    siblings = sc.nextInt();
    System.out.println("There are " + siblings " kids in your family.");
  }
}
```

```
import.java.util.Scanner;

public class Example {
  public static void main(String[] args){
    new Scanner(System.in);
    System.out.println(Please enter the number of days of school you've missed this year);
    int daysMissed = sc.next();
    int daysRemainingBeforeExpulsion == days - 15; // 15 total missed days allowed
    System.out.println("Don't miss " + daysremainingbeforeexpulsion + " more days!");
  }
}
```