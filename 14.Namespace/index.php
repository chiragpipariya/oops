<?php

/* * ********************************************************************** 
 * Namespace
 * @read more :: http://php.net/manual/en/language.namespaces.rationale.php
 * @video :: https://youtu.be/DTB00Nq95ts?list=PLHFGzOr0F8DLu2_ihXK21Pr4MrpBFwrEC
 * @description :: 
 * What are namespaces? In the broadest definition namespaces are a way of encapsulating items. 
 * This can be seen as an abstract concept in many places. 
 * For example, in any operating system directories serve to group related files, and act as a namespace 
 * for the files within them. As a concrete example, the file foo.txt can exist in both directory /home/greg and in /home/other, 
 * but two copies of foo.txt cannot co-exist in the same directory. In addition, to access the foo.txt 
 * file outside of the /home/greg directory, we must prepend the directory name to the file name using the directory separator 
 * to get /home/greg/foo.txt. This same principle extends to namespaces in the programming world 
 * ********************************************************************** */

/**
 * @author chirag pipariya <chiragpipariya@gmail.com>
 * @note ::  
 */
 
namespace fub;

include 'file1.php';
include 'file2.php';
include 'file3.php';

use foo as feline;
use bar as canine;
use animate;

echo feline\Cat::says(), "<br />\n";
echo canine\Dog::says(), "<br />\n";
echo animate\Animal::breathes(), "<br />\n";

