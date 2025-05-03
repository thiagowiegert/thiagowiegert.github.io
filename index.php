<?php
// Aquí puedes agregar lógica PHP en el futuro si lo deseas
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Minecraft Free</title>
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background: url('https://raw.githubusercontent.com/thiagowiegert/Minecraft-Free/refs/heads/main/releases/minecraft.jpg') no-repeat center center fixed;
      background-size: cover;
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      text-align: center;
      padding: 20px;
      box-sizing: border-box;
      position: relative;
    }

    .content {
      background-color: rgba(0, 0, 0, 0.6);
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.8);
      max-width: 700px;
      width: 100%;
      margin: 20px 0;
      z-index: 1;
    }

    h1 {
      font-size: 3em;
      text-shadow: 2px 2px 8px #000;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.2em;
      margin-bottom: 30px;
    }

    .button-container {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .btn {
      background-color: #4caf50;
      padding: 15px 30px;
      color: white;
      font-size: 1.2em;
      text-decoration: none;
      border-radius: 8px;
      transition: background 0.3s;
    }

    .btn:hover {
      background-color: #45a049;
    }

    .floating-ad {
      position: fixed;
      left: 0;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      text-align: center;
      padding: 10px 0;
      z-index: 1000;
    }

    .floating-ad.top {
      top: 0;
      border-bottom: 1px solid #4caf50;
    }

    .floating-ad.bottom {
      bottom: 0;
      border-top: 1px solid #4caf50;
    }

    #frame {
      width: 100%;
      max-width: 728px;
      height: 90px;
      margin: 0 auto;
    }

    #frame iframe {
      border: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      background-color: transparent;
    }

    #frame-link {
      display: block;
      text-align: right;
      font-size: 12px;
      color: #4caf50;
      text-decoration: none;
      margin-top: 5px;
    }

    #frame-link:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .content {
        padding: 20px;
      }
      h1 {
        font-size: 2em;
      }
      #frame {
        height: 60px;
      }
    }
  </style>
</head>
<body>
  <div class="floating-ad top">
    <div id="frame">
      <iframe data-aa='2392902' src='//acceptable.a-ads.com/2392902'></iframe>
      <a id="frame-link" href="https://aads.com/campaigns/new/?source_id=2392902&source_type=ad_unit&partner=2392902">Advertise here</a>
    </div>
  </div>

  <div class="content">
    <div id="frame">
      <iframe data-aa='2392902' src='//acceptable.a-ads.com/2392902'></iframe>
      <a id="frame-link" href="https://aads.com/campaigns/new/?source_id=2392902&source_type=ad_unit&partner=2392902">Advertise here</a>
    </div>

    <h1>Bienvenido a Minecraft Free</h1>
    <p>Elige una opción para continuar:</p>
    <div class="button-container">
      <a href="https://github.com/thiagowiegert/Minecraft-Free" target="_blank" class="btn">GitHub</a>
      <a href="https://minecraftfree.vercel.app/releases" class="btn">Releases</a>
    </div>

    <div id="frame">
      <iframe data-aa='2392902' src='//acceptable.a-ads.com/2392902'></iframe>
      <a id="frame-link" href="https://aads.com/campaigns/new/?source_id=2392902&source_type=ad_unit&partner=2392902">Advertise here</a>
    </div>
  </div>

  <div class="floating-ad bottom">
    <div id="frame">
      <iframe data-aa='2392902' src='//acceptable.a-ads.com/2392902'></iframe>
      <a id="frame-link" href="https://aads.com/campaigns/new/?source_id=2392902&source_type=ad_unit&partner=2392902">Advertise here</a>
    </div>
  </div>
</body>
</html>
