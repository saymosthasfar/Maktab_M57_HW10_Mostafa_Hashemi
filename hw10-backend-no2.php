<?php

class _User
{
    protected $username;

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
}

interface Author
{
    public function setAuthorPrivileges($array);
    public function getAuthorPrivileges();
}

interface Editor
{
    public function setEditorPrivileges($array);
    public function getEditorPrivileges();
}

class AuthorEditor extends _User implements Author, Editor
{
    protected $authorPrivilegesArray;
    protected $editorPrivilegesArray;
    public function setAuthorPrivileges($array)
    {
        $this->authorPrivilegesArray = $array;
    }
    public function getAuthorPrivileges()
    {
        return $this->authorPrivilegesArray;
    }
    public function setEditorPrivileges($array)
    {
        $this->editorPrivilegesArray = $array;
    }
    public function getEditorPrivileges()
    {
        return $this->authorPrivilegesArray;
    }
}

$user1 = new AuthorEditor();
$user1->setUsername("Balthazar");
$user1->setAuthorPrivileges(["write text", "add punctuation"]);
$user1->setEditorPrivileges(["edit text", "edit punctuation"]);
//
$userName = $user1->getUsername();
$userPrivileges = array_merge(
    $user1->getAuthorPrivileges(),
    $user1->getEditorPrivileges()
);
echo $userName . " has the following privileges: ";
foreach ($userPrivileges as $privilege) {
    echo " {$privilege},";
}
echo ".";
