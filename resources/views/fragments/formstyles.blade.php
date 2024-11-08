<style>
    *{
        box-sizing: border-box;
    }

    form{
        width: 300px;
        padding-inline: 20px;
        padding-block: 20px;
        border-radius: 12px;
        margin-block: auto;
        margin-inline: auto;
        background-color: rgb(92, 179, 86);
    }

    form label{
        width: 140px;
        height: 10px;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        display: inline-block;
    }

    form input[type="text"],
    form input[type="number"]{
        width:200;
        padding-block: 3px;
        border: 1px solid #ffffff;
        border-radius: 3px;
        background-color: #ffffff;
        margin-block: 4px;
        display: flex; 
    }

    form button[type="submit"]{
        width: 100%;
        padding: 8px 16px;
        margin-block-start: 32px;
        border: 1px solid #000;
        border-radius: 5px;
        display: block;
        color: #ffffff;
        background-color: #000;
    }
</style>