<!DOCTYPE html>
<html>

<body>
    <script>
        let message;
            message = 70;
            message2  = 100;
            alert(message+message2);

        let car = {
            brand:'ford',
            miles: 12000,
            fueltype: 'diesel',
            weight: 1000,
            enginesize: 1600,
            upgrade: ['sunroof','stereo', 'heatedseats'],
            price: 1000000,
            milesPerGallon: function(distance) {
                return this.enginesize * distance;
            }            
         };

         let fruits = ["apple", "orange", "pear", "banana"];
         alert (fruits);

    </script>

</body>
</html>
    

