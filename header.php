<?php
$title = $title ?? 'Lab 8';
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
      body {
        margin: 0;
        font-family: system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
      }
      .lab8-banner {
        background: linear-gradient(90deg, #0d6efd, #6610f2);
        color: white;
        font-weight: 600;
        text-align: center;
        padding: 12px 0;
        letter-spacing: 1px;
        font-size: 1.1rem;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      }
      header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
      }
    </style>
  </head>
  <body>
    <div class="lab8-banner">Lab 8 – Client Information CRUD System</div>

    <header class="bg-light border-bottom mb-4">
      <div class="container py-3 d-flex justify-content-between align-items-center">
        <h1 class="h4 mb-0">Client Form</h1>
        <div class="btn-group">
          <a href="index.php" class="btn btn-outline-primary btn-sm">Form</a>
          <a href="viewrecords.php" class="btn btn-outline-secondary btn-sm">View Records</a>
        </div>
      </div>
    </header>

    <main class="container">
