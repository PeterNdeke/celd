		 
 <!DOCTYPE html> 
 <html lang="en"> 
 	<head> 
 		<meta charset="utf-8"> 
 		<title> Millitary Task </title> 
 
  		
	</head> 
 	<body>  		<?php 
        
        define("X", 12);	//interger X holding the limited time it will take to complete a task
        
 	 
 	$A = array(7, 6, 5, 3, 4, 2, 1); // interger Array A holding time value it will take to complete different task
       
 			$currentTime = 0;   //Declaration and Initialization of currentTime variable
  
 			$numberOfThings = 0; //Declaration and Initialization of numberOfThings variable 
  
			sort($A);	//Sorting A array in non-decreasing order 		
 
			for ($currentTime = 0; $currentTime <= X; $currentTime++) { //iteration block starts here
                           
                                $currentTime += $A[$numberOfThings];	        //Adding completion time of the selected to-do item to currentTime variable 
  
 				$numberOfThings++;
}								//Iteration block stops here 
 		 ?> 
            <span>The maximum number of tasks to be completed by the military unit, in limited time of  
                <strong><?php echo X . " minutes"; ?></strong> is: </span><strong><?php echo $numberOfThings; ?> tasks</strong> 
 	</body> 
 </html> 

