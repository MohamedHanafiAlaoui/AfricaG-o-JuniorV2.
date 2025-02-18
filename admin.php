<?php
include('pays.php');

$continentObj = new pays();

$continents = $continentObj->getAllContinents();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Africa - Explore the Continent</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom styles for black and white accents */
    .btn-primary {
      background-color: #000000; /* Black color */
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #555555; /* Darker grey for hover effect */
    }

    /* Header and footer black/white shades */
    header {
      background-color: #333333; /* Dark background for header */
    }
    footer {
      background-color: #666666; /* Lighter grey for footer */
    }

    /* Custom black-and-white Section */
    .black-section {
      background-color: #333333; /* Dark background */
      color: white; /* White text */
      padding: 50px 0;
      text-align: center;
      perspective: 1500px; 
    }

    .black-section:hover {
      transform: rotateY(0deg) rotateX(0deg) scale(1.05); 
    }

    .country-card {
      perspective: 1000px; /* Create 3D perspective for the card */
    }

    .country-card .card {
      transform-style: preserve-3d;
      transition: transform 0.5s ease;
    }

    .country-card:hover .card {
      transform: rotateY(15deg) rotateX(10deg); 
    }

    .card {
      background-color: #FFFFFF; 
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      height: 100%;
      color: black; /* Black text for the card */
    }

    /* General text color adjustments */
    h3 {
      color: #333333; /* Dark text color */
    }

    p {
      color: #555555; /* Lighter grey text */
    }

  </style>
</head>
<body class="bg-white text-black">

  <!-- Navigation Bar -->
  <nav class="bg-black p-4">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
      <a href="#" class="text-white text-2xl font-bold">WELCOME TO COUNTRIES</a>
      <div class="flex gap-[2rem]">

        <a href="#" class="text-white text-xl font-bold">Cities</a>
        <a href="admincon.php" class="text-white text-xl font-bold">Continents</a>
        <a href="index.php" class="text-white text-xl font-bold">loge out</a>
      </div>
      <svg style="width:3rem" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://web.resource.org/cc/" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:svg="http://www.w3.org/2000/svg" text-rendering="geometricPrecision" fill-rule="evenodd" xml:space="preserve" shape-rendering="geometricPrecision" clip-rule="evenodd" image-rendering="optimizeQuality" viewBox="0 0 182.954 159.276">
 <g id="Capa_x0020_1">
  <g id="_66472368">
    <path id="_64559656" d="m96.605 94.362l25.022-17.302v-40.431h-1.735l-23.288 14.788c-2.133 1.353-7.0037 1.3689-9.1366 0l-23.288-14.788h-1.735v40.431l25.022 17.302c2.0215 1.3848 7.0992 1.4008 9.1366 0z" fill="#1A181C"/>
    <path id="_64559992" d="m86.209 92.166v-40.275l-22.458-13.953v38.647l22.458 15.581zm10.027-39.271c-1.9019 1.1716-6.771 1.0956-8.7337-0.15217v40.275c1.9172 1.3238 6.7861 1.5063 8.7337 0.1674v-40.291zm1.2933 39.423l22.793-15.733v-38.647l-22.793 14.15v40.23z" fill="#FEFEFE"/>
   <g stroke-width="1.1641" fill="none">
    <polyline id="_64559920" stroke="#1A181C" points="88.552 50.814 68.48 36.632 68.48 39.799"/>
    <polyline id="_66138568" stroke="#1A171C" points="89.698 50.512 73.892 36.632 73.892 40.595"/>
    <polyline id="_66138640" stroke="#1A171C" points="90.685 50.321 78.396 36.632 78.396 40.643"/>
    <polyline id="_66138856" stroke="#1B181C" points="91.878 50.321 81.739 36.632 81.739 40.452"/>
   </g>
   <g stroke-width="1.1641" fill="none">
    <polyline id="_65133296" stroke="#1B181C" points="95.205 50.814 115.28 36.632 115.28 39.799"/>
    <polyline id="_65132600" stroke="#1A181C" points="94.059 50.512 109.86 36.632 109.86 40.595"/>
    <polyline id="_65132840" stroke="#1B181C" points="93.072 50.321 105.36 36.632 105.36 40.643"/>
    <polyline id="_65132960" stroke="#1A171C" points="91.878 50.321 102.02 36.632 102.02 40.452"/>
   </g>
   <path id="_66472536" d="m86.926 51.824c3.3427-2.117 6.6695-2.0374 10.044 0" stroke="#1A171C" stroke-width="1.1641" fill="none"/>
  </g>
  <g id="_66472272">
   <path id="_66472704" d="m37.411 145.69c-1.869-3.4272-3.3976-6.4594-0.93291-13.669 0.3727 0.87442 0.51283 2.7401 1.7521 2.7307 0.14557-2.5733 0.87753-4.248 1.6727-5.783 0.039616 2.3734-0.13702 7.0333 1.2831 8.2243 0.48308-5.4726 1.2079-10.879 3.4524-16.058 17.778-14.24 36.521-24.995 55.571-34.817-0.20142 2.6715 0.044976 5.195 0.63059 7.5675 0.1848-4.0577 1.1307-7.3643 2.9919-9.7799 10.25-1.8645 19.983-3.413 29.516-4.7826-0.85174 3.1068-1.1788 5.9536-1.4606 8.7547 1.816-4.1168 4.0713-7.3279 7.0718-8.972 11.174-0.37153 21.97 1.1656 32.637 3.5326-12.198 10.05-23.594 20.367-38.714 29.82-4.1392 1.1457-7.6505-0.696-11.054-2.9894 1.7015 3.7216 3.7445 6.6373 6.6802 7.7098-17.326 12.237-45.522 20.738-69.83 30.556-3.8382-0.74182-8.1798-1.0556-10.394-3.6593-1.1346 3.4329 3.7579 4.4562 7.8564 5.8136-3.5549-0.88584-7.1619-1.509-10.446-3.3967 0.93594 4.2797 6.0609 6.0587 9.9412 8.6103-4.8806-2.0946-11.029-4.4038-12.53-6.1933 0.2053 1.1688 1.16 2.5043 2.6507 3.9822-2.9514-2.0038-6.0851-4.0982-8.3456-7.2025z" stroke="#1A171C" stroke-width="1.7165" fill="#FEFEFE"/>
   <path id="_66472608" d="m16.489 156.39c48.063-30.444 97.169-59.262 146.16-72.508-42.896 15.927-87.326 43.923-131.44 66.378l-14.716 6.13z" fill="#1A181C"/>
  </g>
  <g id="_66920928">
    <path id="_66472224" d="m92.174 101.76c-22.395 0-40.649-18.254-40.649-40.649s18.254-40.65 40.649-40.65 40.649 18.255 40.649 40.65-18.254 40.649-40.649 40.649zm0 19.673c-5.7875 0-51.836-1.1666-82.374 17.683 3.4084-11.117 15.921-14.457 10.431-14.023-7.8462 0.61762-10.248 3.0196-17.82 1.9215 17.866-9.9965 33.97-13.565 53.711-17.568-14.732-11.026-24.271-28.617-24.271-48.336 0-33.238 27.084-60.322 60.322-60.322s60.322 27.084 60.322 60.322c0 18.689-8.5782 35.434-22.006 46.528 18.094 2.745 43.143 7.7548 51.172 13.474-5.6045 4.6437-13.314 0.45752-17.317 3.5914 4.2091 2.3104 3.9804 4.5751 5.6731 13.268-13.748-9.2873-40.1-19.032-77.845-16.539z" stroke="#FEFEFE" stroke-width="1.3614" fill="none"/>
    <path id="_664722241" d="m92.174 101.76c-22.395 0-40.649-18.254-40.649-40.649s18.254-40.65 40.649-40.65 40.649 18.255 40.649 40.65-18.254 40.649-40.649 40.649zm0 19.673c-5.7875 0-51.836-1.1666-82.374 17.683 3.4084-11.117 15.921-14.457 10.431-14.023-7.8462 0.61762-10.248 3.0196-17.82 1.9215 17.866-9.9965 33.97-13.565 53.711-17.568-14.732-11.026-24.271-28.617-24.271-48.336 0-33.238 27.084-60.322 60.322-60.322s60.322 27.084 60.322 60.322c0 18.689-8.5782 35.434-22.006 46.528 18.094 2.745 43.143 7.7548 51.172 13.474-5.6045 4.6437-13.314 0.45752-17.317 3.5914 4.2091 2.3104 3.9804 4.5751 5.6731 13.268-13.748-9.2873-40.1-19.032-77.845-16.539z" fill="#1A171C"/>
    <path stroke="#FEFEFE" stroke-width="1.4403" d="m59.029 107.15c10.403 6.1045 25.578 10.984 43.698 11.005 32.693 0.27948 52.361 7.4371 64.054 15.326 0.21494-3.654-2.042-6.2549-6.8997-8.7698 4.3848-4.8793 11.242-3.1812 18.055-3.826-9.4576-3.5681-40.13-9.1782-56.681-12.961-5.8251-1.3327-14.874-2.0635-30.092-3.9335-21.172-0.73079-42.215-16.895-42.215-42.237 0-25.965 20.119-43.72 43.72-43.72s42.602 17.54 42.602 43.72c0 20.441-12.789 34.735-28.717 40.023 8.8342 1.5046 16.25 3.9119 21.559 4.8147 12.617-10.425 21.237-27.276 21.237-44.838 0-31.232-25.45-57.584-56.681-57.584-31.232 0-58.229 26.352-58.229 57.584 0 18.528 10.511 35.058 24.59 45.396zm-1.1823 3.826c-14.573 3.8905-28.244 5.3091-44.558 12.854 5.8465 0 2.5149-0.40843 17.239-1.4617-2.9232 4.1485-6.6418 2.5363-12.66 10.446 21.538-12.359 49.803-12.488 64.87-14.036-8.2969-1.4617-15.046-3.5896-24.891-7.8025z" fill="none"/>
    <path id="1" d="m59.029 107.15c10.403 6.1045 25.578 10.984 43.698 11.005 32.693 0.27948 52.361 7.4371 64.054 15.326 0.21494-3.654-2.042-6.2549-6.8997-8.7698 4.3848-4.8793 11.242-3.1812 18.055-3.826-9.4576-3.5681-40.13-9.1782-56.681-12.961-5.8251-1.3327-14.874-2.0635-30.092-3.9335-21.172-0.73079-42.215-16.895-42.215-42.237 0-25.965 20.119-43.72 43.72-43.72s42.602 17.54 42.602 43.72c0 20.441-12.789 34.735-28.717 40.023 8.8342 1.5046 16.25 3.9119 21.559 4.8147 12.617-10.425 21.237-27.276 21.237-44.838 0-31.232-25.45-57.584-56.681-57.584-31.232 0-58.229 26.352-58.229 57.584 0 18.528 10.511 35.058 24.59 45.396zm-1.1823 3.826c-14.573 3.8905-28.244 5.3091-44.558 12.854 5.8465 0 2.5149-0.40843 17.239-1.4617-2.9232 4.1485-6.6418 2.5363-12.66 10.446 21.538-12.359 49.803-12.488 64.87-14.036-8.2969-1.4617-15.046-3.5896-24.891-7.8025z" fill="#FEFEFE"/>
  </g>

<metadata><rdf:RDF><cc:Work><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/><cc:license rdf:resource="http://creativecommons.org/licenses/publicdomain/"/><dc:publisher><cc:Agent rdf:about="http://openclipart.org/"><dc:title>Openclipart</dc:title></cc:Agent></dc:publisher><dc:title>logo school</dc:title><dc:date>2010-05-08T12:08:56</dc:date><dc:description>clip art, clipart, emblem, logo, school, shield, </dc:description><dc:source>http://openclipart.org/detail/59263/logo-school-by-jantonalcor</dc:source><dc:creator><cc:Agent><dc:title>jantonalcor</dc:title></cc:Agent></dc:creator><dc:subject><rdf:Bag><rdf:li>clip art</rdf:li><rdf:li>clipart</rdf:li><rdf:li>emblem</rdf:li><rdf:li>logo</rdf:li><rdf:li>school</rdf:li><rdf:li>shield</rdf:li></rdf:Bag></dc:subject></cc:Work><cc:License rdf:about="http://creativecommons.org/licenses/publicdomain/"><cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction"/><cc:permits rdf:resource="http://creativecommons.org/ns#Distribution"/><cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"/></cc:License></rdf:RDF></metadata>
</svg>
    </div>
  </nav>

  <!-- Main Content Section -->
  <div class="container mx-auto px-6 py-12">

    <!-- Grid of Countries or Regions -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">

      <!-- Country Card 1 with 3D effect -->
      <?php foreach ($continents as $continent): ?>
        <div class="country-card">
          <div class="card">
            <img src="<?= htmlspecialchars($continent['Image']); ?>" alt="Country Image" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-6">
              <h3 class="text-2xl font-semibold"><?= htmlspecialchars($continent['name']); ?></h3>
              <p class="mt-2"><?= htmlspecialchars($continent['population']); ?></p>
              <p class="mt-2"><?= htmlspecialchars($continent['langues']); ?></p>
              <p class="mt-2"><?= htmlspecialchars($continent['description']); ?></p>
             
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
   

  <!-- Footer Section -->
  <footer class="text-center py-6">
    <p class="text-white">&copy; 2024 World Explorer. All rights reserved.</p>
  </footer>
</body>
</html>
