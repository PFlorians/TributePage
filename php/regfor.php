<?php
spl_autoload_register(
    function($clName)
    {
        echo '####regfor autload: ' .$clName .PHP_EOL;
        if(file_exists($clName . ".php"))
        {
            echo 'Existuje: ' .PHP_EOL;
               require_once($clName .".php");
        }
        else
        {
            throw new Exception("Error trying to load file(register form): " . $clName . ".php", 1000);
        }
    }
);
class regfor
{
    private $util;
    function __construct(Util $ut)
    {
        $this->util=$ut;
        $this->init();
    }
    public function init()
    {
        echo '<!-- register form -->
        <div id="modal" class="modal">
            <div id="pseudo-container" class="pseudo-container">
                <div id="psdoCntnr" class="modal-cont">
                    <p class="paraInlineModal">Register</p>
                    <span class="clsBtn" id="clsModal" onclick="closeModal()">&times;</span>
                    <form id="regFrm" class="frmStlng" action="'.$this->util->getSelfRoot().$this->util::php.$this->util->getRelativeAddressingChar() .'register.php" method="POST">
                        <!-- username -->
                        <label for="uname">Username</label>
                        <input type="text" name="usrName" id="uname" onblur="validateName(this)" onfocus="hideUnameErr()" placeholder="Enter username"/>
                        <label for="uname" class="hide errLbl" id="chybaUname">Error Username has to be filled</label>
                        <!-- email -->
                        <label for="mail">E-mail</label>
                        <input type="email" name="usrMail" id="mail" onblur="validateMail(this)" onfocus="hideMailErr()" placeholder="mail@domain.com"/>
                        <label for="mail" id="chybaMail" class="hide errLbl">Error enter: mail@domain.com</label>
                        <!-- password 1 -->
                        <label for="passwd1">Password</label>
                        <input type="password" name="usrPasswd" onblur="validatePasswdChars(this)" onfocus="hidePassw1Err()" id="passwd1"/>
                        <label for="passwd1" id="passwd1Err" class="hide errLbl">Error passwd can use only: a-z, A-Z, 0-9, .,-\/?!][</label>
                        <!-- password 2 -->
                        <label for="passwd2">Repeat password</label>
                        <input type="password" onblur="validatePasswdChars(this); validatePasswdMatch(this)" onfocus="hidePassw2Err()" id="passwd2"/>
                        <label for="passwd2" id="passwd2Err" class="hide errLbl">Error passwd can use only: a-z, A-Z, 0-9, .,-\/?!][</label>
                        <label for="passwd2" id="passwd2ErrMatch" class="hide errLbl">Error passwords must be identical</label>
                        <!-- gender -->
                        <fieldset name="gender">
                            <legend>Pick a Gender</legend>
                            <label for="male">Male</label>
                            <input type="radio" id="male" name="gender" value="male"/>

                            <label for="female">Female</label>
                            <input type="radio" id="female" name="gender" value="female"/>
                        </fieldset>
                        <input type="submit" class="btn btn-primary" value="Submit" onclick="validateAll()"/>

                    </form>
                </div>
            </div>
        </div>
        ';
    }
}
?>
