<?php

class MainController extends Controller
{
  public function index()
  {
    echo '<html><head>
          <title>Index of Books</title>
          <style>
            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              border: 1px solid #e7e7e7;
              background-color: #f3f3f3;
            }

            li {
              float: left;
            }

            li a {
              display: block;
              color: #666;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
            }

            li a:hover:not(.active) {
              background-color: #ddd;
            }

            li a.active {
              color: white;
              background-color: #4CAF50;
            }
          </style>
          </head>
          <body>
          <ul>
              <li><a href="/"> Home</a></li>
              <li><a href="author"> Authors </a></li>
              <li><a href="book"> Books </a></li>
              <li><a href="publisher"> Publishers</a></li>
          </ul>
      </body></html>
      ';
  }
}
