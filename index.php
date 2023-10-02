<?php

echo ("A Git repository is a data structure that stores a collection of files, usually those files are stored inside a folder.") . PHP_EOL;
echo ("To start using git, download it on its website, then run the command 'git init' on the folder you wish git to track and monitor its files.") . PHP_EOL;
echo ("Don't forget to configure your username and email with the commands: 
    'git config --local user.name <yourname>' and  
    'git config --local user.email <youremail>'.");
echo ("NOTE: If you want to add these configurations to all projects on your machine, use '--global' instead.") . PHP_EOL;

echo ("You can use the command 'git status' to observe the folder current status.") . PHP_EOL;
echo ("Use the command 'git add .' to stage all changes.") . PHP_EOL;
echo ("You can use the command 'git rm --cached <file_name>' to unstage the file changes.") . PHP_EOL;
echo ('Use the command "git commit -m "commit_msg"" to commit all staged changes.') . PHP_EOL;

echo ("Ao executar o comando git status, recebemos algumas informações que talvez não estejam tão claras, principalmente quando nos deparamos com termos como HEAD, working tree, index, etc.");
echo ("Para esclarecer ==> HEAD: Estado atual do nosso código, ou seja, onde o Git os colocou.");
echo ("Working tree: Local onde os arquivos realmente estão sendo armazenados e editados.");
echo ("Index: Local onde o Git armazena o que será commitado, ou seja, o local entre a working tree e o repositório Git em si.");

echo ("You can use the command 'git log' to list the commits made in your repository by the most recent order.") . PHP_EOL;
echo ("Variations of this command can be found in 'https://devhints.io/git-log'.") . PHP_EOL;
echo ("To ignore certain files and folders, create a '.gitignore' file.") . PHP_EOL;

echo ("You can use the command 'git remote' to list all the remote repositories that your local repository knows.") . PHP_EOL;

//Remote Repositories
echo ("Remote Repositories: Git repositories can be hosted remotely on services like GitHub, GitLab, or Bitbucket. Remote repositories enable collaboration among multiple developers by allowing them to clone, push, and pull changes to and from a central repository.");
echo ("Using 'git init --bare' in a empty folder, you can create a remote repository, even in your own machine.") . PHP_EOL;
echo ("Using 'git remote add <repository_name> <C:/...>', you can add this to your list of remote repositories.") . PHP_EOL;
echo ("You can use 'git remote rename <old_repository_name> <new_repository_name>', to rename the know remote repositories.") . PHP_EOL;

echo ("Use 'git push <remote_repository_name> <branch_name_usually_master>', to push the committed changes into the remote repository.") . PHP_EOL;
echo ("Use 'git pull <remote_repository_name> <branch_name_usually_master>', to pull the remote repository files into your own.") . PHP_EOL;

