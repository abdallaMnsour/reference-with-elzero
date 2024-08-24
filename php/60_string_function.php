<?php echo '<pre>';
    /**                    1                2                3                    4
     * substr_replace(نهايه القطع(اختياري) , بدايه القطع , العنصرالمستبدل , النص المراد)
     */
    echo substr_replace('Onetwo', 2, 2); // On2
    echo '<br>';
    echo substr_replace('Onetwo', 2, 2, 1); // On2two
    echo '<br>';
    echo substr_replace('Onetwo', 1, 1, 4); // O1o
    echo '<br>';
    echo substr_replace('Onetwo', 1, 1, -1); // O1o
    echo '<br>';

    echo substr_replace('Elzero_web_school', 'A', 7, 3); // Elzero_A_school
    echo '<br>';
    echo substr_replace('Elzero_web_school', 'A', 7, -1); // Elzero_Al
    echo '<br>';
    echo substr_replace('Elzero_web_school', 'A', 7, -8); // Elzero_Ab_school
    echo '<br>';
    echo substr_replace('Elzero_web_school', 'A', 7, -9); // Elzero_Aeb_school
    echo '<br>';
    echo substr_replace('Elzero_web_school', 'A', 7, -10); // Elzero_Aweb_school
    echo '<br>';
    echo substr_replace('Elzero_web_school', 'A', 7, -12); // Elzero_Aweb_school لانه لايستطيع الرجوع للخلف
?>

