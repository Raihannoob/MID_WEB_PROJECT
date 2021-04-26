<?php
$title = "Connect With Staff";
include('header.php');
?>
<td>
    <table>
        <fieldset>
            <legend>Contact Staff</legend>
            <form action='./contactadmin.php' method='POST'>
                <table align="">
                    <tr>
                        <td>
                            Subject:
                        </td>
                        <td>
                            <input id="sub" type="text" name='sub' value="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Date:
                        </td>
                        <td>
                            <input type="date" name='date'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Message Body:
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <textarea id="msg" name="msg" rows="4" cols="50"> <?php
                                                                                $m = $_COOKIE['msg'] ?? "";
                                                                                echo $m; ?> </textarea>
                        </td>
                    </tr>
                    <tr>
                    </tr>

                    <tr>
                        <td>
                            <input type='submit' name="send" value='Send'><button type="button" onclick="document.getElementById('sub').value = ''">Clear Subject</button> <button type="button" onclick="document.getElementById('msg').value = ''">Clear Message</button>

                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>

    </table>
</td>
</tr>
</table>
<fieldset>
    <?php
    include('footer.php');
    ?>