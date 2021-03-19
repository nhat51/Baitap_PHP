<HTML>
<HEAD><TITLE>Employee Details</TITLE>
</HEAD>
<BODY>
<H4>Enter your details</H4>
<FORM method="POST" ACTION="Snippet4.php">
    <TABLE>
        <TR>
            <TD>Employee</TD>
            <TD><INPUT TYPE="text" name="empid"></TD>
        </TR>
        <TR>
            <TD>Name</TD>
            <TD><input type="text" name="Name"></TD>
        </TR>
        <TR>
            <TD>Department</TD>
            <TD>
                <input type="radio" name="dept" value="Finance">Finance
                <input type="radio" name="dept" value="Marketing">Marketing
                <input type="radio" name="dept" value="IT">IT
            </TD>
        </TR>
        <TR>
            <TD>Email</TD>
            <TD><INPUT type="text" name="email"></TD>
        </TR>
    </TABLE>
    <BR>
    <TD><input type="submit" value="SUBMIT"></TD>
</FORM>
</BODY>
</HTML>