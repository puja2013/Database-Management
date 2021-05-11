<html>
    <head>
    <link rel="stylesheet" href="input_Plo.css">
    </head>
<body>
    <form action="1721911_input_Plo.php" method="POST">
        <table border="0">
            <h1>Create Student PLO</h1>
<div class="plo">
            <tr>
                <td>Student Name</td>
                <td align="center"><input type="text" name="studentName" size="30"/></td>
                <td>Student ID</td>
                <td align="center"><input type="text" name="studentId" size="20"/></td>
            </tr>
            <tr>
                <td>Course Name</td>
                <td align="center"><input type="text" name="courseName" size="30"/></td>
                <td>Course ID</td>
                <td align="center"><input type="text" name="courseId" size="20"/></td>

            </tr>
            <tr>
            <td>Section</td>
            <td align="center"><select type="select" name="sectionNumber">
                <option value="Section-1">1</option>
                <option value="Section-2">2</option>
                <option value="Section-3">3</option>
                <option value="Section-4">4</option>
                <option value="Section-5">5</option>
                <option value="Section-6">6</option>
                <option value="Section-7">7</option>
                <option value="Section-8">8</option>
                <option value="Section-9">9</option>
                <option value="Section-10">10</option>
                <option value="Section-11">11</option>
                <option value="Section-12">12</option>
               
                    <td>Enter PLO ID</td>
                    <td align="center"><input type="text" name="coursePloId" size="20"/></td>

            </td>
            <tr>
                <td>Semester</td>
                <td align="center"><select type="semester" name="semestername">
                    <option value="semester-1">Summer</option>
                    <option value="semester-2">Spring</option>
                    <option value="semester-3">Autumn</option>

                   
                        <td>Enter Year</td>
                        <td align="center"><input type="text" name="year" size="20"/></td>
                </td>
            </tr>
        </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Submit"</td>
            </tr>
             </table>

            </div>



    </form>
</body>
</html>