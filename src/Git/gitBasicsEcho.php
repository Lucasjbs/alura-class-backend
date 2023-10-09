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

//Branches
echo ("Hint: VSCode can manage most of these commands automatically in the Source Control sidebar.") . PHP_EOL;

echo ("You can use the command 'git branch' to view the branches in your project.") . PHP_EOL;
echo ("Use the command 'git checkout -b <branch_name>' to create a new branch and go to it.") . PHP_EOL;
echo ("You can use the site 'https://git-school.github.io/visualizing-git/' to help visualize how git branches work.") . PHP_EOL;
echo ("When creating and modifying a new branch, the changes you made on that branch will be separeted from the master branch until these branches are merged.") . PHP_EOL;

//Merge
echo ("To merge a branch with the Default branch, first go to the Default branch.") . PHP_EOL;
echo ("Use the command 'git checkout <branch_name>' to move to an existing branch.") . PHP_EOL;
echo ("On the Default branch, use the command 'git merge <name_of_the_other_branch>'.") . PHP_EOL;
echo ("If the Vim prompt opens up, you can change the commit message by altering the text in the first line.") . PHP_EOL;
echo ("Use ':X' to save and exit. Vim can be painfull to use so I don't recommend do anything else.") . PHP_EOL;

echo ("It is possible to use 'git rebase  <name_of_the_other_branch>' to achieve the same result without a new commit. However, it removes the history of those changes. If you're dealing with a large team or group, you may have to avoid using that.") . PHP_EOL;
echo ("If you try to merge and you have conflicts, you'll have to fix those conflicts before continue.") . PHP_EOL;

//Navigation
echo ("If you want to discard modifications and you haven't commited them yet, use the command 'git checkout -- <filename>'.") . PHP_EOL;
echo ("If you have added but not committed, you can use 'git reset HEAD <filename>' to unstage and undo.") . PHP_EOL;
echo ("VSCode does that automatically.") . PHP_EOL;
echo ("If you have committed the changes already, you can run 'git revert <commit_hash_code>' to undo the commit.") . PHP_EOL;

echo ("If you need to keep the changes saved temporarily, but you can't commit them yet, use 'git stash'.") . PHP_EOL;
echo ("You can use 'git stash list' to list and see the saved changes.") . PHP_EOL;
echo ("You can run 'git stash apply <position_of_the_stash>' to get the saved changes back.") . PHP_EOL;
echo ("Then, you'll have to use 'git stash drop' to remove the stash.") . PHP_EOL;
echo ("Or, you can just use 'git stash pop' to do both.") . PHP_EOL;
echo ("To navigate throught the project versions, you can use git checkout with its previous versions to return to that point of time: 'git checkout <old_commit_hash>'") . PHP_EOL;
echo ("You can use the command 'git diff' to check the file changes.") . PHP_EOL;

//Tags and Releases
echo ('To create a new tag for a stable version of your project, you can use <git tag -a v0.1.0 -m "tag_description">.') . PHP_EOL;
echo ('Then push these changes to add the tag to your project: "git push <remote_repository> v0.1.0".') . PHP_EOL;
echo ("On GitHub, this will generate a new Release of your project on the website for anyone to download and use.") . PHP_EOL;




//What is Open Source
echo ('In Open Source projects, you can receive improvement suggestions from other developers. You can receive this and other types of feedbacks through the Issues tab on GitHub.') . PHP_EOL;
echo ('One way to solve problems from other projects is to fork the project to yourself, and make the changes there.') . PHP_EOL;
echo ("If you're trying to use 2 or more different Git users on the same OS on Windows, you might have to delete the previous credentials so the GitHUb window can appear again to type your email and password.") . PHP_EOL;
echo ("You don't need Issues to create a Pull Requests, but you can use it to solve the Issues in your project.") . PHP_EOL;
echo ("For each new branch, you can create a Pull Request to Merge this branch with the Master. You can even do self assignments with it.") . PHP_EOL;

//Advanced Control
echo ("You can use 'git cherry-pick <commit_harsh>' to merge an especific commit into your current branch.") . PHP_EOL;
echo ("The command 'git bisect' can be used to navigate through previous commits to find a bug. This can be a lot of manual work though, usually it's better to just use an tool or extension like GitLens.") . PHP_EOL;
echo ("You can use 'git blame <file_name>' to see who was the last person that modified the lines of the file. Once again, GitLens can do this automatically.") . PHP_EOL;

//Strategies and Tools
echo ("Once the Master branch is stable, is a common convention to move the project to the Staging Branch for QA tests, and then to Production branch to deploy it.") . PHP_EOL;
echo ("Other tools showcased by the course were 'Git Cola', 'GitHub Desktop', and 'GitKraken'.") . PHP_EOL;
echo ("For me personally, the VSCode Source Control together with GitLens Extension works just fine.") . PHP_EOL;

//Events
echo ("Inside '.git/hooks' there are files with the '.sample' extensions. The 'pre-commit.sample' file can be used to automatically run a shell script before every commit.") . PHP_EOL;
echo ("This can be used to run test scprits to check if the code follows basic standards before submitting the changes.") . PHP_EOL;
echo ("An good example of this is mova-script from work") . PHP_EOL;
echo ("You might need to run 'chmod u+x pre-commit' in Linux OS to be able to run the files.") . PHP_EOL;
echo ("In class, the instructor created a file 'post-receive' to run as a hook right after the developer push his changes. However, this was done inside the hooks of the local BARE server, not on GitHub or GitLab server.") . PHP_EOL;
echo ("It didn't go too deep on it, but maybe, this automatic deploy can be used to run unit tests after pushing the changes.") . PHP_EOL;

//Extras
echo ("Another website to learn and train Git Branching: https://learngitbranching.js.org/") . PHP_EOL;
