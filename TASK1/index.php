<!DOCTYPE html>
<html>
<head>
<title>calculator</title>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
    
    <main class=" bg-white shadow-lg px-30 py-20 rounded-4xl  font-semibold">
    <h1 class="text-2xl font-bold text-center text-gray-700 mb-6">PHP Calculator</h1>
    <form action="index.php" method="get" class="flex flex-col gap-4">
<!--  -->
            <label for="num1" class="text-gray-600 ">Enter your first number</label>
            <input required type="text" name="num1" id="num1" class="border border-gray-300 focus:border-blue-400 px-4 py-2 "
            value="<?php echo isset($_GET['num1']) ? htmlspecialchars($_GET['num1']) : '' ?>">
            <br>

            <!--  -->
            <label for="num2">Enter your second number</label>
            <input required type="text" name="num2" id="num2" class="border border-gray-300 focus:border-blue-400 px-4 py-2"
            value="<?php echo isset($_GET['num2']) ? htmlspecialchars($_GET['num2']) : '' ?>">


            <br>
            <!--  -->
            <label for="operation" >Select the operation</label>
            <select name="operation" id="operation" class="border border-gray-300  px-4 py-2  w-full border p-2 rounded">
                <option value="+" <?php echo (isset($_GET["operation"])&&$_GET["operation"]=="+")?"selected":""?>>+</option>
                <option value="*" <?php echo (isset($_GET["operation"])&&$_GET["operation"]=="*")?"selected":""?>>*</option>
                <option value="-" <?php echo (isset($_GET["operation"])&&$_GET["operation"]=="-")?"selected":""?>>-</option>
                <option value="/" <?php echo (isset($_GET["operation"])&&$_GET["operation"]=="/")?"selected":""?>>/</option>
            </select><br>
            
            
            <input type="submit" value="Calculate" class="bg-blue-500 py-2 rounded-xl cursor-pointer hover:opacity-[80%] transition-all duration-300">
            
            <?php 
if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["operation"])){
    $num1 = floatval($_GET["num1"]);
    $num2 = floatval($_GET["num2"]);
    $operation = $_GET["operation"];
    $result = 0;
if($operation=="+"){
$result=$num1+$num2;

}
elseif($operation=="-"){
    $result=$num1-$num2;

}
elseif($operation=="/"){
    if ($num2 == 0) {
        echo "<p>Error: Cannot divide by zero.</p>";
        exit;
    }
    $result = $num1 / $num2;
}
else{
    $result=$num1*$num2;
}
echo("the result is ". $result);
}













?>
            
            
        </form>
    </main>





</body>

</html>