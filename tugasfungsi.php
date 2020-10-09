<?php
function fungsi_sin($a)
{
  return sin($a);
}

function fungsi_cos($a)
{
  return cos($a);
}

function fungsi_tan($a)
{
  return tan($a);
}

function fungsi_acos($a)
{
  return acos($a);
}

function fungsi_atan($a)
{
  return atan($a);
}

function fungsi_pow($nilai, $pangkat)
{
  return pow($nilai, $pangkat);
}

function fungsi_log($a)
{
  return log($a);
}

echo "<br> Fungsi Sin 45 = ",fungsi_sin(45);
echo "<br> Fungsi Cos 45 =  ",fungsi_cos(45);
echo "<br> Fungsi Tan 45 =  ",fungsi_tan(45);
echo "<br> Fungsi Acos 0.52532198881773 =  ",fungsi_acos(0.52532198881773);
echo "<br> Fungsi ATan 45 =  ",fungsi_atan(45);
echo "<br> Fungsi Pow 4 pangkat 2 =  ",fungsi_pow(4,2);
echo "<br> Fungsi Log 10 =  ",fungsi_log(10);

//dan masih banyak yang lain.

echo "<br> Angka Random=  ",rand(1,1000);
echo "<br> Angka Random=  ",getrandmax();
?>
