var img = ["images/homeimg1.jpg", "images/homeimg2.png", "images/homeimg3.jpg"];
		var x = 0;
		
		function next(i) {
			
			if (i == 1 )	{
				
				if (x == 0 || x == 1)	{
					x++;
					document.getElementById("sliderImage").src = img[x];
					
					if (x == 1)	{
					document.getElementById("sliderImageText").innerHTML = "Teacher Trainer 1";
						}
						else {
							document.getElementById("sliderImageText").innerHTML = "Teacher Trainer 2";
							}
				}
				else {
					x = 0; 
					document.getElementById("sliderImage").src = img[x];
					document.getElementById("sliderImageText").innerHTML = "Teacher Trainer 3 ";
				}
			}
			
			else	{
				
				if (x == 1 || x == 2)	{
					x--;
					document.getElementById("sliderImage").src = img[x];
				
					if (x == 0)	{
					document.getElementById("sliderImageText").innerHTML = "Teacher Trainer 4";
						}
						else {
							document.getElementById("sliderImageText").innerHTML = "Teacher Trainer 5";
							}
				}
				
				else {
					x = 2; 
					document.getElementById("sliderImage").src = img[x];
					document.getElementById("sliderImageText").innerHTML = "Teacher Trainer 6";
				}
			}
		}
		
