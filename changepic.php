<?php
            $title = "Change Picture"; 
            include('header.php');
?>
            <td>
                <fieldset>
                    <legend><b>CHOOSE PROFILE PICTURE</b></legend>
                    <form action='' method=''>
                        <table width='100%'>
                            <tr>
                                <td>
                                    <img src='user.png' height='150px'>
                                    <br>
                                    <input type='file' name='filepic' />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value='Submit'>
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </td>
        </tr>
    </table>
    <fieldset>
<?php
            include('footer.php');
?>       