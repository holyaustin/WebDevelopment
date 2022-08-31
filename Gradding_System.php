// OGALI ANTHONIA CHINYERE
// 2020/HND/32044/CS

$grade = (int) readline ('Enter your grade');
switch (true) {
    case $grade >=0 && $grade <=39:
    echo "your score is $grade Grade: F";
     break;
    case $grade >=40 && $grade <=44:
    echo "your score is $grade Grade: E";
     break;
    case $grade >=50 && $grade <=54:
    echo "your score is $grade Grade: D";
     break;
    case $grade >=55 && $grade <=59:
    echo "your score is $grade Grade: CD";
     break;
    case $grade >=60 && $grade <=64:
    echo "your score is $grade Grade: C";
     break;
    case $grade >=65 && $grade <=69:
    echo "your score is $grade Grade: BC";
     break;
    case $grade >=65 && $grade <=69:
    echo "your score is $grade Grade: B";
     break;
    case $grade >=70 && $grade <=74:
    echo "your score is $grade Grade: AB";
     break;
    case $grade >=75 && $grade <=100:
    echo "your score is $grade Grade: A";
     break;
   
    
    default:
        print("your score is out of range");
        break;
}


?>
