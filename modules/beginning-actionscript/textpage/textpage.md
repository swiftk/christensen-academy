#Beginning ActionScript
###by Cameron Christensen (2012)

**Goal:** By the end of the module, you should be able to create your own unique computer game. This will not be an easy journey, but if you stick with it, you'll be amazed at what you can accomplish.

* [Intro to ActionScript](#intro-to-actionscript)
* [Comments](#comments)
* [Basic Commands](#basic-commands)
* [Fixing Errors](#fixing-errors)
* [Playhead Commands on Instances](#playhead-commands-on-instances)
* [Buttons](#buttons)
* [Movie Clip Properties](#movie-clip-properties)
* [Registration Points](#registration-points)
* [Creating Instances from Code](#creating-instances-from-code)
* [Variables](#variables)
* [camelCase and UpperCamelCase](#camelcase-and-uppercamelcase)
* [Functions](#functions)
* [Parameters (Arguments) of Functions](#parameters-arguments-of-functions)
* [Returning Values from Functions](#returning-values-from-functions)
* [Code Formatting](#code-formatting)
* [Working with Numbers](#working-with-numbers)
* [Math Functions](#math-functions)
* [Working with Strings](#working-with-strings)
* [String Methods](#string-methods)
* [Operators](#operators)
* [If Statements](#if-statements)
* [Events](#events)
* [While Loops](#while-loops)
* [For Loops](#for-loops)
* [Timer Events](#timer-events)
* [Frame Events](#frame-events)
* [Review](#review)

##Intro to ActionScript
*"Most good programmers do programming not because they expect to get paid or get adulation by the public, but because it is fun to program." --Linus Torvalds*

If you're navigating this module, it may very well be your first time doing any computer programming. If so, you may be wondering what exactly computer programming is and what the ActionScript 3.0 programming language is. The following is a quick, introductory explanation.

###What is Computer Programming?
Computer programming is basically just telling the computer what to do. When you program, you write commands for the computer to follow. The computer will always do EXACTLY what you say, so you'll need to be very carefull and pay really close attention to small details.

Also, I should point out that programs are more than just sequences of commands. Programs use *logic*. For example, whenever you click on you computer screen, the computer program you're using has to decide what to do based on your click. If you click on [this link](http://www.youtube.com/watch?v=oHg5SJYRHA0)... point being, programs behave in different ways based on conditions, such as what the user clicked on. If you want to become a great programmer, you'll need to get ready to use lots of logic.

###What is ActionScript?

ActionScript is the programming language for Flash. ActionScript can't be used outside of Flash, and Flash content can't be developed with any programming language other than ActionScript. If you want to make games and other interactive things in Flash, then you need to learn how to program in ActionScript.

In this module, you will learn the basics of ActionScript 3.0, which came after--believe it or not--ActionScript 2.0! I mention this up front so that you make sure to always create new Flash projects using ActionScript 3.0. If you accidentally start a new project in ActionScript 2.0, things won't work.

We'll start out writing what you might call *frame script*. The idea is pretty simple; we'll be writing ActionScript code in individual frames on the timeline. We'll be creating a special layer called "Actions" that we'll use exclusively for writing our code in.

![An example of the Actions layer](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/actions-layer.png)

Notice the "a" symobl in the keyframes of the Actions layer. This symbol lets you know that code has been written for that frame. To see and edit the code, right-click and go to Actions to open the Actions panel, which will display the code for that frame. Alternatively, you can press F9 to open the Actions panel.

![An example of the Actions panel](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/actions-panel.png)

**Side Note:** The Actions panel is an example of what's known as a *text editor*. When writing ActionScript, you'll use the Actions panel, but if you someday write computer code in another language, you'll end up using a different text editor. Unlike Word Processors, such as Microsoft Word, text editors only allow you to edit *plain text*, which is what computer programs are written in.

###What does it take to be good at programming?

* **Perseverence:** Everyone encounters challenges when programming. Your success as a programmer has everything to do with your willingness to tackle difficult problems and work through them til completion. This takes time. You may encounter problems that stump you for 30 minutes, an hour, a day, and even longer! Albert Einstein once said, "It's not that I'm so smart, it's just that I stay with problems longer." The same is true, I think, of all really good programmers. Becomming an expert won't just magically happen. It takes hard work, dedication, and above all, perseverence in the face of failure. This module is just an introduction to programming, but sometimes just starting out can be the hardest part. Stick with it, and you'll succeed.
* **Joy of Problem Solving:** I highly doubt anyone can become a really good programmer without deeply enjoying solving difficult problems that stretch their abilities to the max. The longer you stick with a problem before getting it, the greater the thrill you'll have and the deeper your learning will be.
* **Play and Curiosity:** Great programmers love playing around with code. As they learn, they try new things out on hunches just to see what might work. Even when they get something right, they play around with it a bit more just to see what happens. This is similar to how babies learn to stand and walk. Babies fall down over and over again as they try to stand. Eventually, when they finally get it, they don't stop; instead, they try to walk, which inevitably leads to more falling. Yet, they keep at it, driven by some strange playful curiosity about the world around them. Never satisfied with their progress, they press on, eventually learning to walk and even run. This, I think, is the way to approach learning programming--with a playful and unquenchable curiosity.
* **Logic:** The types of problems you'll encounter in programming are very logical in nature. The type of logic you'll encounter doesn't come naturally to most people, but the more you practice, the easier it becomes. Have patience and take the time to think logically and reason through different scenarios until you discover the answer. You'll get better at it as you go, but only if you invest the time and energy to really *think*.
* **Creativity:** Programming is an exceptionally creative process. Programmers enjoy designing and building new things. If writing computer programs were something a routine and mechanical, computers could probably write their own programs.

##Comments

All programming languages have a way to write *comments*. Comments are not actual code. They're just notes programmers leave themselves and each other to explain the code.

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







##Basic Commands

*"When I say jump, you say, 'How high?'" --My father's early attempts at programming me...*

####Adding ActionScript to a Frame
In Flash, we write ActionScript code inside of frames. Here's how:

![](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/adding-actionscript-to-a-frame.png)

1. Create a new layer called "Actions". You'll use this layer to hold **all** of your ActionScript code.
2. Add a keyframe on this layer where you'd like to put some code.
3. Right click on the keyframe and select "Actions" to open the Actions panel. **Note:** Wherever you right-click is where your code will end up, so be careful. If you don't right-click on a keyframe, the code will be inserted in the nearest keyframe to the left of where you clicked.
4. Type the commands you want the computer to follow.

**Tip:** Use F9 on the keyboard to open the ActionsPanel more quickly.

#####Editing ActionScript on an Existing Frame
Right-click on the frame and go to Actions or, if the Actions panel is already open, you can find the correct frame on the left side of the panel, which is easier, I think.

![](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/editing-existing-actionscript.png)

####Some Examples of Basic Commands
```java
// Pay close attention to small details like spaces, capital letters, and semicolons.*/

stop(); // stops the playhead in the current timeline
play(); // starts a stopped playhead in the current timeline
gotoAndPlay(56); // commands the playhead to jump to the frame whose number is in parenthesis
trace("Hello World"); // writes a message to the Output panel
```

####Give It a Try
Play around with [this example](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/basic-commands.fla) to see if you can figure out what the code is doing. To test the program press ctrl+enter on PC or command+return on Mac. Look at the code for each frame. Try changing up some of the commands and predict the results.




##Fixing Errors
*"Everybody makes mistakes. Everybody has those days." --Miley Cyrus*

####Compiler Errors
When you run your program--ctrl+enter (Windows) or command+return (Mac)--your ActionScript code gets *compiled* and an SWF file is generated. What exactly "compiling" means is somewhat irrelevant right now. Just realize that Flash attempts to find *compiler errors* before your program actually runs. These errors will be shown to you in the Compiler Errors panel.

![An example of the Actions layer](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/compiler-error.png)

**Key Idea:** Compiler errors mean your program won't work correctly. You must **fix all compiler errors before doing anything elese**.

Each compiler error will provide a short description you should read to try to understand the error. Then, **double click on the error to see it in the Actions panel** where you can try to fix it.

**Friendly Advice:** Whenever you need to fix an error, take the time to try to fully understand your mistake. Every error you make is a learning opportunity. If you take full advantage of these learning opportunities, you'll find much more success farther down the road.

####Runtime Errors
Some errors aren't caught at "compile time" and instead appear during "run time". Runtime errors are a little trickier to fix in general because you only discover them when your program actually runs your code. For example, if there is a runtime error on frame 203, you won't even know it exists until the playhead gets to frame 203. These errors show up in the Output panel and can be harder to decipher than compiler errors.

![An example of the Actions layer](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/runtime-error.png)

####Logic Errors
The last type of error is a logic error. When your program has a logic error, it runs without compiler or runtime errors, but it doesn't do what it's supposed to. These can be the most difficult errors to fix because Flash won't give you any hints or even tell you that an error exists. If you play computer games, you may be familiar with logic errors already; perhaps you know them as *glitches*.

####Bugs
Programmers often refer to runtime and logic errors as "bugs". Debugging code is a skill all programmers naturally develop as they continue writing programs.





##Variables

Every program stores information of some kind. Think about a computer game. A game needs to store things like health, points, and the time remaining in the game. All of this information or data is stored in **variables**. When you think of variables in programming, try not to think of them in the same way that you might think of variables in math class. In math, variables represent something that is unknown. In programming, variables are like little buckets or containers that store something. Sometimes variables store numbers, but they can also store text, sounds, and other objects like instances of movie clip symbols.

In ActionScript 3.0, you can *declare* (i.e., make) new variables by typeing `var` followed by the name you want to give to the variable, a colon, and the type of data you want to store in the variable.

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

Of course, a variable doesn't store anything unless we tell it to. In the examples above, we created lots of new variables, but they haven't been *assigned* any values yet. That is, they aren't actually storing anything. Here's how we might go about *assigning values to variables*:

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

In the examples above, notice how the values on the right were assigned to the variables on the left. This is very important to remember. Unlike in math, you can't switch this around. That is, writing `5 = score` makes no sense in programming. The "=" sign is actually called the *assignments operator* because it takes the value of the expression on the right side of the "=" sign and *assigns* it to the variable on the left side of the equals sign.

####Give it a try!
Play around with [this example](http://www.christensenacademy.org/modules/beginning-actionscript/textpage/variable-declaration-and-assignment.fla) to help you understand how variables work.

###Literals
Consider the following example:

```java
//assume that a Number variable named "score" was declared previously in the code
score = 3;
```

The variable named "score" has a type of "Number", which means that is can only be used to store numbers like 3, 5, 2.74, and -553.89222. Interestingly

###Numbers

###Strings


There's really no good answer here. Some people thinks it makes sense to use the phrase "string of characters" because strings just store a sequence (string) of letters, numbers, spaces, and other characters that people can type on their keyboards. Personally, I think the name "string" was a bad choice and that it would have made much more sense to call these things "text". Oh well, we're stuck with what we've got. Whenever you're programming and you want to store or work with text in some way, you'll be working with *strings*.

###Assignment Statements

##Literals








##Playhead Commands on Instances

When animating in Flash, you've created symbols, which appear in the library. When you drag copies of a symbol onto the stage, you're creating **instances** of that symbol. By default, these instances don't have names, and, if we want to be able to write code that affects instances, we need to be able to somehow refer to them in the code. Here's how we do it:

1. Select an instance on the stage.
2. Go to the Properties panel.
3. Give the instance a name making sure not to include spaces in the name or start the name with a number. I strongly recommend following the "[camelCase](#camelcase)" convention described below.
4. Use the instance name in the code to change the instance's properties, stop it from playing, and do other interesting things with it.

```java
/* The following code assumes there is an instance of a movie clip symbol named "shootingStar"
   that has an animation of a shooting star inside of it. */

shootingStar.gotoAndPlay(3); // tells the playhead of the instance to jump to frame three
shootingStar.stop(); // tells the playhead of the instance to stop
shootingStar.play(); // tells the playhead of the instance to play 
```

##Buttons

My definition of a button: *any instance on the stage that does something when clicked on*.

There is, however, such a thing as a button symbol that changes its appearance when it is being hovered over and clicked on. Like a movie clip symbol, you give instances of buttons instance names, which can then be referred to in the code to do stuff.

**Note:** I recommend against using button symbols for a variety of reasons. You can do everything you need to without them. And, if you're clever, you can get movie clip symbols to have hover effects just by using some `stop()` and `gotoAndPlay()` commands.

No matter whether you have an instance of a button symbol or a movie clip symbol, you can use *code snippets* to help you quickly generate code that will execute only when a user clicks on the instance. Here's how:

1. Select the instance on the stage.
2. Give the instance an instance name.
3. Go to the Code Snippets panel.
4. Choose "Event Handlers" -> "Mouse Click Event".
5. Edit the code inside the function to your heart's delight.

###Stop, Play, and Restart Buttons

**Video:** [Stop, Play, and Restart Buttons](http://www.youtube.com/watch?v=6To3XOAyY9A)

Once you've used code snippets, add code to control the playhead. Here's an example of what your code might look like for a restart button:

```java
restartButton.addEventListener(MouseEvent.CLICK, fl_MouseClickHandler);

function fl_MouseClickHandler(event:MouseEvent):void
{
	gotoAndPlay(1);
}

```

##Movie Clip Properties

**Video:** [Movie Clip Properties]()

We can do a whole lot more with instances than just control their playheads. Instances have lots of properties we can change.

```java
// The following code assumes there is an instance of a movie clip symbol named "blueSquare."

// The following lines of code set the instance's various properties to new values.
blueSquare.x = 55; // other values: any positive or negative number
blueSquare.y = 400;
blueSquare.rotation = 180; // (works in degrees) other values: any positive or negative number
blueSquare.alpha = 0.5; // other values: 0.0 (transparent) to 1.0 (opaque)
blueSquare.width = 100; // other values: any positive number
blueSquare.height = 100;
blueSquare.scaleX = 1.5; // (works as a percent where 1.0 = 100%) other values: any positive number
blueSquare.scaleY = 2;
blueSquare.visible = false; // other values: true

// The following lines of code write the values of various properties of the instance in the output panel.
trace(blueSquare.x);
trace(blueSquare.y);
trace(blueSquare.alpha);
// and so on and so forth
```

##Creating Instances from Code

**Video:** [Creating Instances from Code](http://www.youtube.com/watch?v=wRpG-OzPins)

You know how you usually created instances of symbols by dragging out copies of symbols from the library? Well, you can actually just create new instances straight from the code. Here's how:

1. Add a linkage name to the symbol in the library. You can do this by double clicking in the linkage column of the library where the symbol resides. This might seem like a strange, uneccessary step, so I've provided an additional short explanation of [why we need linkage](#why-we-need-linkage).
2. Create a new instance and add it to the "display stack" as shown below.

```java
//Note: The following code assumes that there is a symbol in the library with a linkage name "Spaceship"

var milleniumFalcon:Spaceship = new Spaceship(); //Note: "milleniumFalcon" is the instance name for this instance
addChild(milleniumFalcon); //This line adds the instance to the "display stack"
```

**Note:** It's pretty easy to forget the line of code where you add the instance to the display stack. Realize that if you forget this line of code, your newly created instance will never actually appear even though you technically created it.

Your instance will have all of the same properties that any of your previous instances had before. For example, typing `milleniumFalcon.x = 100;` would change the x-coordinate of the ship as you would expect.

###Why We Need Linkage

First of all, I personally think that the designers of Flash would have been wise to not make the linkage name necessary, but this would have required them to enforce stricter naming conventions for the common names we give symbols. Such restrictions include things like not allowing spaces in names and not allowing names to start with numbers. Alas, because our common names for symbols are not forced to conform to these more rigid standards, we must supply a secondary name (a "linkage" name) that actually does conform to those more rigid standards. In addition to not having spaces and not starting with numbers, linkage names should be "[UpperCamelCase](#uppercamelcase)". Here are some examples:

```
Spaceship
BlueSpaceship
FloatingButterfly
MaleFigureSkater
ThreeBillyGoats
```





##camelCase and UpperCamelCase
###camelCase
When naming instances, variables, and functions in ActionScript, you should use what's called "camel case", or, as I like to write it, camelCase. In camelCase, there are no spaces all characters are lower case except for the first letters of words after the first. Notice how the capital letters add "humps" like a camel to the names. Here are some examples:
```
missile
flower
badGuy
redHat
smallHammer
fryingPan
flyingSquirrelWithSupermanCape
```

**Friendly Advice:** It's a good idea to make names for your instance, variable, and function names descriptive. It's a bad idea to give names that are hard to remember or confusing.

###UpperCamelCase
When creating linkage names for symbols, you should follow the UpperCamelCase naming convention. Here are some examples:
```
Missile
Flower
BadGuy
RedHat
SmallHammer
FryingPan
FlyingSquirrelWithSupermanCape
```

**Friendly Advice:** It's a good idea to make your linkage names descriptive. If the symbol is a picture of a hammer, you should probably name it "Hammer".




* [Functions](#functions)
* [Parameters (Arguments) of Functions](#parameters-arguments-of-functions)
* [Returning Values from Functions](#returning-values-from-functions)


* [Code Formatting](#code-formatting)