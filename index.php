<?php

echo ("A Git repository is a data structure that stores a collection of files, usually those files are stored inside a folder.") . PHP_EOL;

echo ("To start using git, download it on its website, then run the command 'git init' on the folder you wish git to track and monitor its files.") . PHP_EOL;

echo ("Don't forget to configure your username and email with the commands: 
    'git config --local user.name <yourname>' and  
    'git config --local user.email <youremail>'.");

echo ("You can use the command 'git status' to observe the folder current status.") . PHP_EOL;

echo ("Use the command 'git add .' to stage all changes.") . PHP_EOL;
echo ("You can use the command 'git rm --cached <file_name>' to unstage the file changes.") . PHP_EOL;

echo ('Use the command "git commit -m "commit_msg"" to commit all staged changes.') . PHP_EOL;
