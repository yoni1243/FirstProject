<!DOCTYPE html>
<html>
<head>
    <title>Html Forms</title>

    <link rel="stylesheet" href="C:\Users\bingx\Documents\Training\FirstProject\css\bootstrap.min.css">    
    <style>
        
    </style>
</head>
 
<body>

 

    <h2>Form and Form Elements</h2>
    
    <form>

        <p>Gender : 
            <label>Male</label>
            <input type="radio" name="gender" value="male" />
            <label>Female</label> 
            <input type="radio" name="gender" value="female" />
        </p>
        <p>
            Language: 
            <ul style="list-style-type:none;">
                <li>
                    <input type="checkbox" name="language" value="english" /> English
                </li>
                <li>
                    <input type="checkbox" name="language" value="german" /> German
                </li>


                <li>
                    <input type="checkbox" name="language" value="arabic" /> Arabic
                </li>
            </ul>
        </p>
        <p>
            <label>Nationality: </label>
            <select name="nationality">
                <option value="british">British</option>
                <option value="german">German</option>
                <option value="uae">UAE</option>
                <option value="others">Others</option>
            </select>
        </p>
        <p>
            <label>Username : </label>
            <input type="text" />
        </p>
        <p>
            <label>Password : </label>
            <input type="password" />
        </p>
        <p>
            <label>Brief Info About You: </label>
            <textarea name="briefInfo" rows="5" cols="40">
            </textarea>
        </p>
        <p>
            <button type="submit">Submit</button>
        </p>
    </form>
    

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>