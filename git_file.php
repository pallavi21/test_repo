Initializing a Repository in an Existing Directory::

---> $ git init
	 $ git add *.c
	 $ git add LICENSE
     $ git commit -m 'initial project version'
     
Cloning an Existing Repository

----> git clone  https://github.com/pallavi21/test_repo /var/www/folder_name
	  git remote add origin





Undoing Things
 git commit --amend


Unstaging a Staged File 
$ git reset HEAD CONTRIBUTING.md

Unmodifying a Modified File
$ git checkout -- CONTRIBUTING.md







Git-Specific Commands

---->git init
	git config
	git help
	git status
	git add
	git commit -m “Message here.”
	git branch
	git checkout
	git merge
	git push
	git pull
	
	
--->Clone the remote repository
    git clone git@github.com:user/mygit.git

    Create a branch
    git checkout -b marker_up_down 
    or $ git branch iss53 
    or $ git checkout iss53

    Change (edit) your file

    Add and commit your file
    git add path/main.html
    git commit

    Push the change to remote
    git push origin marker_up_down



