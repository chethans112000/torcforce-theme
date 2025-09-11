<?php
?>
<!-- Gallery Section -->
<section id="gallery" class="gallery-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Gallery</h2>
            <p class="section-subtitle">See our products and solutions in action across various industries</p>
        </div>
        
        <div class="gallery-grid">
            <!-- Gallery Item 1 -->
            <div class="gallery-item">
                <div class="gallery-image" onclick="openModal('https://images.pexels.com/photos/162553/keys-workshop-mechanic-tools-162553.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Hydraulic Torque Wrench', 'High-precision bolting tool')">
                    <img src="https://images.pexels.com/photos/162553/keys-workshop-mechanic-tools-162553.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Hydraulic Torque Wrench">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Hydraulic Torque Wrench</h3>
                            <p>High-precision bolting tool</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="gallery-item">
                <div class="gallery-image" onclick="openModal('https://images.pexels.com/photos/1108101/pexels-photo-1108101.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Industrial Application', 'Oil & Gas facility installation')">
                    <img src="https://images.pexels.com/photos/1108101/pexels-photo-1108101.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Industrial Application">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Industrial Application</h3>
                            <p>Oil & Gas facility installation</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="gallery-item">
                <div class="gallery-image" onclick="openModal('https://images.pexels.com/photos/1108572/pexels-photo-1108572.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Hydraulic Pump System', 'High-pressure pumping solution')">
                    <img src="https://images.pexels.com/photos/1108572/pexels-photo-1108572.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Hydraulic Pump System">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Hydraulic Pump System</h3>
                            <p>High-pressure pumping solution</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="gallery-item">
                <div class="gallery-image" onclick="openModal('https://images.pexels.com/photos/1108099/pexels-photo-1108099.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Manufacturing Facility', 'State-of-the-art production line')">
                    <img src="https://images.pexels.com/photos/1108099/pexels-photo-1108099.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Manufacturing Facility">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Manufacturing Facility</h3>
                            <p>State-of-the-art production line</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="gallery-item">
                <div class="gallery-image" onclick="openModal('https://images.pexels.com/photos/1108117/pexels-photo-1108117.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Wind Turbine Installation', 'Renewable energy project')">
                    <img src="https://images.pexels.com/photos/1108117/pexels-photo-1108117.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Wind Turbine Installation">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Wind Turbine Installation</h3>
                            <p>Renewable energy project</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="gallery-item">
                <div class="gallery-image" onclick="openModal('https://images.pexels.com/photos/1108572/pexels-photo-1108572.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Bolt Tensioning Tool', 'Precision tensioning equipment')">
                    <img src="https://images.pexels.com/photos/1108572/pexels-photo-1108572.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Bolt Tensioning Tool">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Bolt Tensioning Tool</h3>
                            <p>Precision tensioning equipment</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 7 -->
            <div class="gallery-item">
                <div class="gallery-image" onclick="openModal('https://images.pexels.com/photos/1108101/pexels-photo-1108101.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Pipeline Construction', 'Critical infrastructure project')">
                    <img src="https://images.pexels.com/photos/1108101/pexels-photo-1108101.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Pipeline Construction">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Pipeline Construction</h3>
                            <p>Critical infrastructure project</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 8 -->
            <div class="gallery-item">
                <div class="gallery-image" onclick="openModal('https://images.pexels.com/photos/162553/keys-workshop-mechanic-tools-162553.jpeg?auto=compress&cs=tinysrgb&w=1200', 'Quality Control Lab', 'Testing and certification facility')">
                    <img src="https://images.pexels.com/photos/162553/keys-workshop-mechanic-tools-162553.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Quality Control Lab">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h3>Quality Control Lab</h3>
                            <p>Testing and certification facility</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Image Display -->
        <div id="imageModal" class="image-modal">
            <div class="modal-content">
                <span class="modal-close" onclick="closeModal()">&times;</span>
                <img id="modalImage" class="modal-image" src="" alt="">
                <div class="modal-info">
                    <h3 id="modalTitle"></h3>
                    <p id="modalDescription"></p>
                </div>
            </div>
        </div>
    </div>
</section>