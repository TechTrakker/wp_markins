// Script-1*************************************************

        // Toggle Category Visibility
        document.querySelectorAll('.category').forEach(function (category) {
            category.addEventListener('click', function () {
                const dropdown = this.nextElementSibling;
                dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
            });
        });
    // Script-2 *************************************************************
     
        // Custom Zoom Feature
        const mapFrame = document.getElementById('google-map');
        const zoomInBtn = document.getElementById('zoom-in');
        const zoomOutBtn = document.getElementById('zoom-out');
        let zoomLevel = 14; // Initial Zoom Level

        // Function to update map URL with new zoom level
        function updateMapZoom(level) {
            const baseURL = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3393.312109747973!2d74.52169851496156!3d32.49057430693226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f29ed92b41799%3A0x269847b7cfcd631f!2sMudassar%20Shaheed%20Road%2C%20Muslim%20Town%2C%20Sialkot%2C%20Punjab%2051310%2C%20Pakistan!5e0!3m2!1sen!2sus!4v1694240723332!5m2!1sen!2sus";
            const zoomParam = `&z=${level}`;
            mapFrame.src = baseURL + zoomParam;
        }

        // Zoom In
        zoomInBtn.addEventListener('click', function () {
            if (zoomLevel < 21) {
                zoomLevel++;
                updateMapZoom(zoomLevel);
            }
        });

        // Zoom Out
        zoomOutBtn.addEventListener('click', function () {
            if (zoomLevel > 1) {
                zoomLevel--;
                updateMapZoom(zoomLevel);
            }
        });