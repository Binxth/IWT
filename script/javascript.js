var img = ["images/homeimg1.jpg", "images/homeimg2.jpg", "images/homeimg3.png"];
		var x = 0;
		
		function next(i) {
			
			if (i == 1 )	{
				
				if (x == 0 || x == 1)	{
					x++;
					document.getElementById("sliderImage").src = img[x];
					
				}
				else {
					x = 0; 
					document.getElementById("sliderImage").src = img[x];
				}
			}
			
			else	{
				
				if (x == 1 || x == 2)	{
					x--;
					document.getElementById("sliderImage").src = img[x];
				
				}
				
				else {
					x = 2; 
					document.getElementById("sliderImage").src = img[x];
				}
			}
		}
		
