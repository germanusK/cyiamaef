<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        #form-container{
            width: 70%;
            padding: 3rem 1.7rem;
            margin: 2rem auto;
            background-color: seashell;
            border: 1px solid silver;
            border-radius: 1rem;
        }

        form{
            display: block;
            width: 90%;
        }
        form > textarea{
            border: 1px solid gray;
            border-radius: 0.8rem;
            margin: 1rem;
            background-color: black;
            color: white;
            min-height: 4rem;
            width: inherit;
        }
    </style>
</head>
<body>
    <div id="form-container">
        <form method="post">
            @csrf
            
            <textarea style="width: 100%;" name="command" id="" required></textarea>
            <div style="display: flex; justify-content: end; margin-top: 2rem;">
                <button type="submit" style="border: 1px solid gray; border-radius: 0.4rem; padding: 0.7rem 2rem; background-color: white; color: black;">Run</button>
            </div>
        </form>
    </div>
</body>
</html>