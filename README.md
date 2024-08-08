<h1>📱 Temp SMS Online</h1>

<p>This repository is developed as part of the Temp SMS Online service, available at <a href="https://tempsmsonline.com">https://tempsmsonline.com</a>. It provides a PHP-based API for receiving SMS messages using temporary phone numbers.</p>

<h2>✨ Features</h2>
<ul>
  <li>🌍 Fetches temporary SMS numbers from various countries.</li>
  <li>📩 Displays SMS messages received by the fetched numbers.</li>
  <li>📋 Allows users to retrieve SMS messages via API endpoints.</li>
  <li>🔒 Secure and easy-to-integrate API.</li>
  <li>📜 Lightweight and fast.</li>
</ul>

<h2>🛠️ Prerequisites</h2>
<ul>
  <li>PHP 7.x or above</li>
  <li>Composer (optional, for dependency management)</li>
</ul>

<h2>📥 Installation</h2>
<ol>
  <li>
    <strong>Clone the repository:</strong>
    <pre><code>git clone https://github.com/architecttr/temp-sms-online.git
cd temp-sms-online
</code></pre>
  </li>
  <li>
    <strong>Install dependencies:</strong><br>
    If you're using Composer, run:
    <pre><code>composer install</code></pre>
  </li>
</ol>

<h2>🚀 Usage</h2>

<h3>Running the API</h3>
<ol>
  <li>Start a local PHP server:
    <pre><code>php -S localhost:8000</code></pre>
  </li>
  <li>Access the API via <a href="http://localhost:8000">http://localhost:8000</a>.</li>
</ol>

<h3>API Endpoints</h3>
<ul>
  <li><strong>GET /fetch_numbers.php</strong>: Retrieves a list of available temporary numbers.</li>
  <li><strong>GET /fetch_messages.php?number=1234567890</strong>: Retrieves messages for a specific number.</li>
</ul>

<h3>HTML Integration</h3>
<p>The provided HTML file <code>index.php</code> demonstrates how to use the API endpoints to fetch and display temporary numbers and messages. You can view this file by navigating to <a href="http://localhost:8000/index.php">http://localhost:8000/index.php</a> in your web browser.</p>

<h3>Example API Request</h3>
<ul>
  <li><strong>Fetch Available Numbers:</strong>
    <pre><code>curl http://localhost:8000/fetch_numbers.php</code></pre>
  </li>
  <li><strong>Fetch Messages for a Number:</strong>
    <pre><code>curl http://localhost:8000/fetch_messages.php?number=1234567890</code></pre>
  </li>
</ul>

<h2>🔗 API Source</h2>
<p>The API provides a simple interface for accessing temporary SMS messages. It pulls data from <a href="https://tempsmsonline.com/api/numbers/">https://tempsmsonline.com/api/numbers/</a> and <a href="https://tempsmsonline.com/api/message/12345678">https://tempsmsonline.com/api/messages/12345678</a>.</p>

<h2>🛠️ Tools Used</h2>
<ul>
  <li>PHP: Server-side scripting language.</li>
  <li>Composer: Dependency management.</li>
</ul>

<h2>👤 Author</h2>
<p><strong>Architect</strong></p>
<ul>
  <li><a href="https://github.com/architecttr">GitHub</a></li>
</ul>

<h2>📜 License</h2>
<p>This project is licensed under the MIT License - see the <a href="LICENSE">LICENSE</a> file for details.</p>

<h2>⚠️ Disclaimer</h2>
<p>Numbers and messages generated through the Temp SMS Online service, available at <a href="https://tempsmsonline.com">https://tempsmsonline.com</a>, are public and accessible by anyone. Please use this service responsibly.</p>
