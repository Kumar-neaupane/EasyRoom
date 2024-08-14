<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Listing Form</title>
    <link rel="stylesheet" href="{{ asset('assets/css/addr.css') }}">
</head>

<body>
    @include('hnavbar');
    <form id="room-listing-form">
        <!-- Section 1: Basic Details -->
        <div class="section">
            <h2>1. Basic Details</h2>
            <p>All the fields with <span class="mandatory">*</span> are mandatory</p>
            <div class="form-group">
                <label for="purpose">Purpose <span class="mandatory">*</span></label>
                <select id="purpose" name="purpose" required>
                    <option value="rent">Rent</option>
                    <option value="rent">Lease</option>
                    <!-- Add other options here -->
                </select>
            </div>
            <div class="form-group">
                <label for="title">Your Title <span class="mandatory">*</span></label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="category">Category <span class="mandatory">*</span></label>
                <select id="category" name="category" required>
                    <option value="single-room">Single Room</option>
                    <option value="single-room">Two Room</option>
                    <option value="single-room">Flat </option>
                    <option value="single-room">House</option>
                    <!-- Add other options here -->
                </select>
            </div>
            <div class="form-group">
                <label for="main-photo">Main Photo</label>
                <input type="file" id="main-photo" name="main-photo">
            </div>
            <div class="form-group">
                <label for="additional-photos">Add More Photos</label>
                <input type="file" id="additional-photos" name="additional-photos" multiple>
            </div>
            <div class="form-group">
                <label for="price">Price <span class="mandatory">*</span></label>
                <input type="text" id="price" name="price" placeholder="e.g., Rs 5000 per month" required>
            </div>
            <div class="form-group">
                <label for="price-negotiable">Price Negotiable <span class="mandatory">*</span></label>
                <select id="price-negotiable" name="price-negotiable" required>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
        </div>

        <!-- Section 2: Amenities -->
        <div class="section">
            <h2>2. Amenities</h2>
            <p>All the fields with <span class="mandatory">*</span> are mandatory</p>

            <div class="form-group">
                <label for="bed-room">Bed Room</label>
                <input type="text" id="bed-room" name="bed-room" placeholder="e.g., 1,2,3">
            </div>
            <div class="form-group">
                <label for="kitchen">Kitchen</label>
                <select id="kitchen" name="kitchen">
                    <option value="select">Select Kitchen</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <!-- Add other options here -->
                </select>
            </div>
            <div class="form-group">
                <label for="bath-room">Bath Room</label>
                <input type="text" id="bath-room" name="bath-room" placeholder="e.g., 1,2,3">
            </div>

            <div class="form-group">
                <label for="faced">Faced</label>
                <select id="faced" name="faced">
                    <option value="select">Select Option</option>
                    <option value="East">East</option>
                    <option value="West">West</option>
                    <option value="North">North</option>
                    <option value="South">South</option>
                    <!-- Add other options here -->
                </select>
            </div>
            <div class="form-group">
                <label for="parking">Parking</label>
                <select id="parking" name="parking">
                    <option value="select">--Select Option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="balcony">Balcony</label>
                <select id="balcony" name="balcony">
                    <option value="select">Select Option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="rental-floor">Rental Floor</label>
                <select id="rental-floor" name="rental-floor">
                    <option value="select">Select Option</option>
                    <option value="ground">Ground Floor</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                    <option value="5th+">5th+</option>

                </select>
            </div>
            <div class="form-group">
                <label for="road-type">Road Type</label>
                <select id="road-type" name="road-type">
                    <option value="select">Select Option</option>
                    <option value="goreto_bato">Goreto bato</option>
                    <option value="pithed">Black Pitched</option>
                    <option value="muddy">Muddy Road</option>
                    <option value="dhalan">Dhalan Road</option>
                </select>
            </div>
            <div class="form-group">
                <label for="water-facility">Water Facility</label>
                <select id="water-facility" name="water-facility">
                    <option value="select">Select Option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>

                </select>
            </div>
            <div class="form-group">
                <label for="sitting-rooms">Sitting Rooms</label>
                <input type="text" id="sitting-rooms" name="sitting-rooms">
            </div>
        </div>

        <!-- Section 3: More Details -->
        <div class="section">
            <h2>2. More Details</h2>
            <p>All the fields with <span class="mandatory">*</span> are mandatory</p>
            <div class="form-group">
                <label for="contact-number">Contact Number <span class="mandatory">*</span></label>
                <input type="tel" id="contact-number" name="contact-number" required>
            </div>
            <div class="form-group">
                <label for="property-location">Property Location <span class="mandatory">*</span></label>
                <input type="text" id="property-location" name="property-location" required>
            </div>
            <div class="form-group">
                <label for="lat-long">Location if have latitude and longitude (optional)</label>
                <input type="text" id="lat-long" name="lat-long">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="featured-video">Featured Video (Optional)</label>
                <input type="file" id="featured-video" name="featured-video">
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="submit-button">SUBMIT FOR APPROVAL</button>
    </form>

    <script>
        document.getElementById('room-listing-form').addEventListener('submit', function(event) {
            event.preventDefault();
            let isValid = true;

            const validateField = (field, customValidationFn) => {
                const value = field.value.trim();

                // Reset previous styles
                field.style.borderColor = '#ccc';
                field.nextElementSibling?.remove();

                if (customValidationFn && !customValidationFn(value)) {
                    field.style.borderColor = 'red';
                    const errorSpan = document.createElement('span');
                    errorSpan.style.color = 'red';
                    errorSpan.textContent = 'Invalid value.';
                    field.parentNode.appendChild(errorSpan);
                    isValid = false;
                } else {
                    const successSpan = document.createElement('span');
                    successSpan.style.color = 'green';
                    successSpan.textContent = '✔';
                    field.parentNode.appendChild(successSpan);
                }
            };

            // Validate Title
            validateField(document.getElementById('title'), (value) => value.length > 0);

            // Validate Price
            validateField(document.getElementById('price'), (value) => !isNaN(value) && Number(value) > 0);

            // Validate Bathroom
            validateField(document.getElementById('bath-room'), (value) => {
                const numBathrooms = parseInt(value, 10);
                return numBathrooms > 0 && numBathrooms <= 10;
            });

            // Validate Contact Number
            validateField(document.getElementById('contact-number'), (value) => /^\d{10}$/.test(value));

            if (isValid) {
                alert('Form is valid and ready for submission.');
            }
        });
    </script>
</body>
@include('footer')

</html>
