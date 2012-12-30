#Intro to ActionScript
*"Most good programmers do programming not because they expect to get paid or get adulation by the public, but because it is fun to program." --Linus Torvalds*

If you're navigating this module, it may very well be your first time doing any computer programming. If so, you may be wondering what exactly computer programming is and what the ActionScript 3.0 programming language is. The following is a quick, introductory explanation.

###What is Computer Programming?
Computer programming is basically just telling the computer what to do. When you program, you write commands for the computer to follow. The computer will always do EXACTLY what you say, so you'll need to be very carefull and pay close attention to small details.

###What is ActionScript?

ActionScript is the programming language for Flash. ActionScript can't be used outside of Flash, and Flash content can't be developed with any programming language other than ActionScript. If you want to make games and other interactive things in Flash, then you need to learn how to program in ActionScript.

In this module, you will learn the basics of ActionScript 3.0, which came after--believe it or not--ActionScript 2.0! I mention this up front so that you make sure to always create new Flash projects using ActionScript 3.0. If you accidentally start a new project in ActionScript 2.0, things won't work.

We'll start out writing what you might call *frame script*. The idea is pretty simple; we'll be writing ActionScript code in individual frames on the timeline. We'll be creating a special layer called "Actions" that we'll use exclusively for writing our code in.

![An example of the Actions layer](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/actions-layer.png)

Notice the "a" symobl in the keyframes of the Actions layer. This symbol lets you know that code has been written for that frame. To see and edit the code, right-click and go to Actions to open the Actions panel, which will display the code for that frame. Alternatively, you can press F9 to open the Actions panel.

![An example of the Actions panel](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/actions-panel.png)

**Side Note:** The Actions panel is an example of what's known as a *text editor*. When writing ActionScript, you'll use the Actions panel, but if you someday write computer code in another language, you'll end up using a different text editor. Unlike Word Processors, such as Microsoft Word, text editors only allow you to edit *plain text*, which is what computer programs are written in.

###What does it take to be good at programming?

* **Perseverence:** Everyone encounters challenges when programming. Your success as a programmer has everything to do with your willingness to tackle difficult problems and work through them til completion. This takes time. You may encounter problems that stump you for 30 minutes, an hour, a day, and even longer! Albert Einstein once said, "It's not that I'm so smart, it's just that I stay with problems longer." The same is true, I think, of all really good programmers. Becomming an expert won't just magically happen. It takes hard work, dedication, and above all, perseverence in the face of failure. This module is just an introduction to programming, but sometimes just starting out can be the hardest part. Stick with it, and you'll succeed.
* **Joy of Problem Solving:** I highly doubt anyone can become a really good programmer without deeply enjoying solving difficult problems that stretch their abilities to the max. The longer you stick with a problem before getting it, the greater the thrill you'll have and the deeper your learning will be.
* **Play and Curiosity:** Great programmers love playing around with code. As they learn, they try new things out on hunches just to see what might work. Even when they get something right, they play around with it a bit more just to see what happens. This is similar to how babies learn to stand and walk. Babies fall down over and over again as they try to stand. Eventually, when they finally get it, they don't stop; instead, they try to walk, which inevitably leads to more falling. Yet, they keep at it, driven by some strange playful curiosity about the world around them. Never satisfied with their progress, they press on, eventually learning to walk and even run. This, I think, is the way to approach learning programming--with a playful and unquenchable curiosity.
* **Logic:** The types of problems you'll encounter in programming are very logical in nature. The type of logic you'll encounter doesn't come naturally to most people, but the more you practice, the easier it becomes. Have patience and take the time to think logically and reason through different scenarios until you discover the answer. You'll get better at it as you go, but only if you invest the time and energy to really *think*.
* **Creativity:** Programming is an exceptionally creative process. Programmers enjoy designing and building new things. If writing computer programs were something routine and mechanical, computers could probably write their own programs.





##Getting Started

*"When I say jump, you say, 'How high?'" --My father's early attempts at programming me...*

###Comments

All programming languages have a way to write *comments*. Comments are not actual code. They're just notes programmers leave themselves and each other to explain their code.

Here is an example:

```java
stop(); //this is a comment
```

In the example above, `run();` was an actual piece of code, while `//this is a comment` was a comment. Of course, normally the comment would actually say something useful about the code. The following is a more realistic example:

```java
stop(): // this command stops the playhead
```

In ActionScript, comments can be written in two ways:

```java
/* This comment can span
multiple lines */

// This comment must stay on this line
```

####Should I write lots of comments?
Having lots of comments isn't always good because they clutter up the rest of the code. Most teachers encourage novice programmers to write lots of comments. I don't necessarily agree. My pragmatic advice: do what works for you. Your focus should be on learning programming. If you love writing comments in your code to make things more clear, then go for it. Otherwise, don't worry about writing many comments early on.

I'll be writing lots of comments in my examples throughout this document because I'm trying to help you learn. I normally would not write quite so many comments.

####Adding ActionScript to a Frame
In Flash, we write ActionScript code inside of frames. Here's how:

![](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/adding-actionscript-to-a-frame.png)

1. Create a new layer called "Actions". You'll use this layer to hold **all** of your ActionScript code.
2. Add a keyframe on this layer where you'd like to put some code.
3. Right click on the keyframe and select "Actions" to open the Actions panel. **Note:** Wherever you right-click is where your code will end up, so be careful. If you don't right-click on a keyframe, the code will be inserted in the nearest keyframe to the left of where you clicked.
4. Type the commands you want the computer to follow.

**Tip:** Use F9 on the keyboard to open the ActionsPanel more quickly.

#####Editing ActionScript on an Existing Frame
Right-click on the frame and go to Actions or, if the Actions panel is already open, you can find the correct frame on the left side of the panel. This is easier and faster than right-clicking on a frame in the timeline.

![](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/editing-existing-actionscript.png)

####Some Examples of Basic Code
```java
// Pay close attention to small details like spaces, capital letters, and semicolons.*/

stop(); // stops the playhead in the current timeline
play(); // starts a stopped playhead in the current timeline
gotoAndPlay(56); // commands the playhead to jump to the frame whose number is in parenthesis
trace("Hello World"); // writes a message to the Output panel
```

**Note:** Each line of code above can be thought of as a command telling the computer to do something. I think this is a good way to think about it for the time being, but realize that technically what's going in each line is that [functions](#functions) are being called.

####Give It a Try
Play around with [this example](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/basic-code-1.fla) to see if you can figure out what the code is doing. To test the program press ctrl+enter on PC or command+return on Mac. Look at the code for each frame. Try changing up some of the commands and predict the results.




##Fixing Errors
*"Everybody makes mistakes. Everybody has those days." --Miley Cyrus*

####Compiler Errors
When you run your program--ctrl+enter (Windows) or command+return (Mac)--your ActionScript code gets *compiled* and an SWF file is generated. What exactly "compiling" means is somewhat irrelevant right now. Just realize that Flash attempts to find compiler errors before your program actually runs. These errors will be shown to you in the Compiler Errors panel.

![An example of the Actions layer](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/compiler-error.png)

**Key Idea:** Compiler errors mean your program won't work correctly. You must **fix all compiler errors before doing anything elese**.

Each compiler error will provide a short description you should read to try to understand the error. Then, **double click on the error to see it in the Actions panel** where you can try to fix it.

**Friendly Advice:** Whenever you need to fix an error, take the time to try to fully understand your mistake. Every error you make is a learning opportunity. If you take full advantage of these learning opportunities, you'll find much more success farther down the road.

####Runtime Errors
Some errors aren't caught at "compile time" and instead appear during "run time". Runtime errors are a little trickier to fix in general because you only discover them when your program actually runs your code. For example, if there is a runtime error on frame 203, you won't even know it exists until the playhead gets to frame 203. These errors show up in the Output panel and can be harder to decipher than compiler errors.

![An example of the Actions layer](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/runtime-error.png)

####Logic Errors
The last type of error is a logic error. When your program has a logic error, it runs without compiler or runtime errors, but it doesn't do what it's supposed to. These can be the most difficult errors to fix because Flash won't give you any hints or even tell you that an error exists. If you play computer games, you may be familiar with logic errors already; perhaps you know them as *glitches*.

####Bugs
Programmers often refer to runtime and logic errors as "bugs". Debugging code is a skill all programmers naturally develop as they continue writing programs.





##Variables

Every program stores information of some kind. Think about a computer game. A game needs to store things like health, points, and the names of the players in the game. All of this information or data is stored in **variables**.

When you think of variables in programming, try not to think of them in the same way that you might think of variables in math class. In math, variables represent something that is unknown. In programming, variables are like little containers that store something. Sometimes variables store numbers, but they can also store text (called "strings"), sounds, and other objects like instances of movie clip symbols.

In ActionScript 3.0, you can *declare* (i.e., make) new variables by typing `var` followed by the name you want to give to the variable, a colon, and the type of data you want to store in the variable.

Some examples of *declaring variables*:
```java
var score:Number; //create a variable named "score" of type "Number"
var lives:Number;
var coinsCollected:Number;
var timeRemaining:Number;

var player1:String; //create a variable named "player1" of type "String", which is is for storing text.
var player2:String;
var helpMessage:String;

var badGuy:Tank; //create a variable named "badGuy" of type "Tank", where "Tank" is a linkage name for a symbol.
var cam:Teacher;
```

The reason they're called *variables* is that what they contain may *vary* or change throughout the program. For example, if you made a game in which the player tried to earn points, you would need to have a variable for keeping track of the points, and the value stored in that variable would change throughout the game.

Of course, a variable doesn't store anything unless we tell it to. In the examples above, we *declared* lots of new variables, but they haven't been *assigned* any values yet. That is, they aren't actually storing anything. Here's how we might go about assigning values to the variables we've already declared:

```java
score = 5; //assign the number 5 to the score variable.
lives = 3;
coinsCollected = 89;
timeRemaining = 500;

player1 = "cam"; //assign the text (string) "cam" to the player1 variable.
player2 = "eric";
helpMessage = "Press ESC to quit."

badGuy = new Tank(); //create a new instance of the Tank symbol and assign it to the badGuy variable
cam = new Teacher();
```

In the examples above, notice how the values on the right were assigned to the variables on the left. This is very important to remember. Unlike in math, you can't switch this around. That is, writing `5 = score` makes no sense in programming. The "=" sign is actually called the *assignments operator* because it takes the stuff (i.e., the value of the expression) on the right side of the "=" sign and *assigns* it to the variable on the left side of the equals sign.

It should also be noted that you can combine variable declaration and assignment onto a single line of code like this:

```java
var player1:Number = "Cam";
```


####Why are they called "Strings"?
There's really no good answers here. Some people thinks it makes sense to use the phrase "string of characters" because strings just store a sequence (i.e., string) of letters, numbers, spaces, and other characters that people can type on their keyboards. Personally, I think the name "string" was a bad choice and that it would have made much more sense to just call these things "text". Oh well, we're stuck with what we've got. Whenever you're programming and you want to store or work with text in some way, you'll be working with *strings*. All programming languages use them, not just ActionScript.

####Naming Variables
When naming variables, the following rules apply:
* No spaces
* No weird characters--just alphanumeric ones--though you'll sometimes see programmers use the "_" character as well.
* You can't start a name with a number
* You can't use a *reserved word* such as "var", "Number", "String, etc.
* You can't use the same name for two variables

**Important:** You should use [camelCase](#camelcase) for naming variables. This isn't strictly required, but I highly recommend it.

###Literals
Consider the following example:

```java
//assume that a Number variable named "score" was declared previously in the code
score = 3;
```

The variable named "score" has a type of "Number", which means that is can only be used to store numbers like 3, 5, 2.74, and -553.89222. When we write numbers like these directly in our code, we call them *number literals*. Using the word "literal" is really just a fancy piece of terminology, but I think it's a helpful one. If I just said "number" and not "number literal", I might be talking about a variable or a literal in the code. Here are some more examples of number literals:

```java
//notice that we don't use commas in large numbers
5
32592
3.14
-3.14
```

Just like there are number literals, there are *string literals*, which are used for text. Again, this may sound like overly fancy terminology, but I think it is helpful to call these things "string literals" instead of just "strings" because it helps clarify what we're talking about. Here are some examples:

```java
"Hello World"
"This is a string!!!"
"This is also a string."
"We can also put numbers and other symbols in strings: 898&*(*@#$979423"
"89" //note: this is not the same as the number literal 89
```

###Some Math
Try these:
```java
var pointsPossible:Number = 20;
var questionsMissed:Number = 3;
var pointsEarned:Number = pointsPossible - questionsMissed;
var percentage:Number = pointsEarned/pointsPossible;
trace(percentage);

var score1:Number = 44.6;
var score2:Number = 45.9;
var score3:Number = 42.1;
var average:Number = (score1 + score2 + score3)/3; 
//NOTE: Order of operations works as you'd expect
trace(average);
```

In addition to using `*`, `/`, `-`, and `+` symbols, you can use the `%` symbol, which gives a remainder. For example, `11%5` evaluates to `1` and `17%6` evaluates to `5`.

###Concatenation
When working with strings, `+` has a whole new meaning. Instead of adding numbers together, it "concatenates" strings, which is a fancy word that just means the strings join together.

```java
var name1:String = "Cam";
var name2:String = "Eric";
var newMessage:String = name1 + " is " + name2 + "'s younger brother."
trace(newMessage);
```

**Note:** If you put `+` in between a string and a number, concatenation occurs. For example, `4 + "ever"` evaluates to `"4ever"`.


###Give it a try!
Play around with [this example](http://www.christensenacademy.org/modules/beginning-actionscript/textpages/variable-declaration-and-assignment.fla) to help you understand how variables work.


##Functions
*"In software engineering, Don't Repeat Yourself (DRY) is a principle of software development aimed at reducing repetition [...]" --Wikipedia entry on the DRY principle*

Functions are reusable segments of code that we can "call" whenever we need them.

Check out this example:

```java
// declare a function named helloWorld
function helloWorld():void
{
  trace("Hello World!");
  trace("My name is Cam!");
}

helloWorld(); //call the helloWorld function
```

**Big Idea:** The code for the function (i.e., the stuff written between `{` and `}`) only executes when the function is called by writing `helloWorld()`.

**Note:** Naming conventions are the same for functions as they are for variables.

**Note:** Functions are "processed" at compile time and can be called before or after they are declared. That is, even if you declare a function on frame 300, you can still call it on frame 1.

####Two Ways to Write Curly Brackets for Functions
```java
function example1():void {
  //code goes here
}

function example2():void
{
  //code goes here
}
```

Both of the examples above are perfectly valid. Choose which one you like best then do your best to stick with it.

###Give it a try!
Play around with [this example](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/functions-example.fla) to help you understand how functions work.

###Built-In Functions
Whenever you find yourself typing parenthesis, such as when you tell the playhead to stop by typing `stop()`, you're actually calling a function. In the case of `stop()`, you're calling a function named stop. Realize that even though you didn't write the stop function, somebody else did. Functions like the stop function are "built-in" and you can call them any time you need to.

###Arguments
Some functions require *arguments* or *parameters*, which can be thought of as input. Here are some examples:

```java
//the gotoAndPlay function takes a number as a parameter
gotoAndPlay(3);

//the trace function can take a string or a number as a parameter
trace("Hello World");
trace(3);

//here's how to make a function with a String as a parameter
function thankYou(recipient:String):void
{
  trace("Thank you, " + recipient);
}

thankYou("Brooke");

//here's how to make a function that takes two parameters--first a string, then a number
function happyBirthday(person:String, age:Number):void
{
  trace("Happy Birthday, " + person + ", on turning " + age + "!");
}

happyBirthday("Eric", 28); 
```

###Return Types
Functions can *return* values when called.

```java
var lotteryTicket:Number = randomLotteryNumber();
```

In the example above, we're assuming that calling the `randomLotteryNumber` function returns a value, and that that value gets assigned to the variable `lotteryTicket`. Said another way, the code `randomLotteryNumber()` will evaluate to a number, which will then get assigned to the `lotteryTicket` variable.

**Note:** Every function has a return type. However, so far you've mostly seen functions with a return type of void (e.g., `function example():void`). A function with this return type evaluates to `undefined` when called.

####Example function returning a number
```java
// What is 1+2+3+...+n? This function returns the answer
function triangleNumber(n:Number):Number
{
  var answer = n*(n+1)/2;
  return answer;
}

var example1:Number = triangleNumber(6);
trace(example1); //prints 21
trace(triangleNumber(10)); //prints 55
var example2:Number = triangleNumber(6) - triangleNumber(5);
trace(example2); //prints 6
```
####Example function returning a string
```java
function login(username:String, password:String):String
{
  if(username=="cam" && password=="kowabunga")
  {
    return "Login successful";
  }
  else
  {
    return "Login failed";
  }
}
trace(login("cam","strawberryshake"));
trace(login("cam","kowabunga"));
```
####Example function returning nothing (void)
```java
function activateBonus():void
{
  score = score + 8;
  health = health + 12;
}
```

**Note:** Whereas you can have multiple parameters for a single function, you can only have one return type.

**Note:** The line of code that says `return` followed by an expression should almost always be the last line of your function. It terminates the execution of the function, so any code that might come after it is pretty pointless most of the time.