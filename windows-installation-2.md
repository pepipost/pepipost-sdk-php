# Steps to install Pepipost PHP Code Library on Windows/Linux with IDE

Installing SDK on windows Server with Integrated Development Enviroment(IDE)

These steps are dedicated to those who ❤️ to code on IDE.

> Optional Note: This library will be sending HTTP calls to Pepipost server and hence if you're running any firewalls on your machine, then please whitelist the API base URL ```api.pepipost.com``` with ```port 443/80```


### Installation Steps

1. Please Follow first 3 Steps of installation same as [Windows without IDE](https://github.com/pepipost/pepipost-php-sdk/blob/feature_x/pepipost-sdk-php/windows-Installation-1.md#installation-step)  

2. Install any IDE you Love to work with.

   we will be using PHPstorm which is easily available on https://www.jetbrains.com/phpstorm/download/

3. The following section explains how to use the PepipostAPI library in a new project.


   3.1. **Open Project in an IDE:** Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

   ![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=Pepipost%20API-PHP)

   Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

   ![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=Pepipost%20API-PHP)     


  3.2. **Add a new Test Project:** Create a new directory by right clicking on the solution name as shown below:

  ![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=Pepipost%20API-PHP)

  Name the directory as "test"

  ![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=Pepipost%20API-PHP)
   
  Add a PHP file to this project

  ![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=Pepipost%20API-PHP)

  Name it "testSDK"

  ![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=Pepipost%20API-PHP)

  Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

  ```PHP
  require_once "../vendor/autoload.php";
  ```

  It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created  during dependency installations.

  ![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=Pepipost%20API-PHP)

  After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize  the client library and using controller methods is given in the subsequent sections.

3.3. **Run the Test Project:** To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

   Open ```Settings``` from ```File``` menu.
   ![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=Pepipost%20API-PHP)

   Select ```PHP``` from within ```Languages & Frameworks```

   ![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=Pepipost%20API-PHP)

   Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

   ![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=Pepipost%20API-PHP)

   Once the interpreter is selected, click ```OK```

   ![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=Pepipost%20API-PHP)

   Copy/Paste sample Example from simpleUsage.md to the ![testSDK.php](https://github.com/pepipost/pepipost-php/blob/feature_x/pepipost-sdk-php/simpleUsage.md) file and Save.

   To run your project, right click on your PHP file inside your Test project and click on ```Run```

   ![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=Pepipost%20API-PHP)




