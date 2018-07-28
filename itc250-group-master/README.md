ITC250-group: Conversion App
======

## Setup
Install XAMPP on your local machine. [XAMPP Download page](https://www.apachefriends.org/index.html)

Install GIT on your local machine. [GIT download page](https://git-scm.com/downloads)

Clone the project with the `git clone https://github.com/WednesdayWolf/itc250-group.git` command.

Everything should be wherever you cloned it!

## Running the App
In XAMPP, next to Apache click Config->httpd.conf. Edit httpd.conf:


`DocumentRoot "YOUR/PROJECT/PATH"`

`<Directory "YOUR/PROJECT/PATH">`

Use XAMPP to start Apache. The page should be live at http://localhost

## Starting
Before you start work, navigate to your directory in CMD and run `git pull origin master`

Consider starting a branch. You can start a new branch with `git -b yourbranchname`.

## Finishing
When you end work, add your changes with `git add .`

Then commit your changes with `git commit -m "SOME MESSAGE"`. Replace SOME MESSAGE with a detailed explantion of what you did.

Push your committed changes with `git push origin yourbranchname`. If you didn't create a branch, push your changes with `git push origin master`.

## Useful Links
[Project Document](https://docs.google.com/document/d/15UnzRKjXUHMPcIW5Q13DHdV4DrGPQiUMjq53W5Jmwpo/edit?usp=sharing)

[Git Repo](https://github.com/WednesdayWolf/itc250-group)

## Style
[PSR-1 standards](https://www.php-fig.org/psr/psr-1/)

[PSR-2 standards](https://www.php-fig.org/psr/psr-2/)
