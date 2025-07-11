# PHP Chat Application

A simple real-time chat application built with PHP, MySQL, JavaScript, HTML, and CSS. Users can sign up, log in, search for other users, and exchange messages in real time.

## Features
- User registration and login
- Real-time user status (active/offline)
- Search users by name
- Send and receive messages instantly
- User profile images
- Responsive UI

## Project Structure
```
php_project/
│
├── html/
│   ├── chat.php           # Chat interface
│   ├── header.php         # Common HTML head
│   ├── index.php          # Signup page
│   ├── login.php          # Login page
│   ├── users.php          # User list page
│   ├── images/            # Uploaded user images
│   └── php/
│       ├── config.php         # Database connection
│       ├── data.php           # User/message data logic
│       ├── get-chat.php       # Fetch chat messages
│       ├── insert-chat.php    # Insert new message
│       ├── login.php          # Login logic
│       ├── logout.php         # Logout logic
│       ├── search.php         # User search logic
│       ├── signup.php         # Signup logic
│       └── users.php          # Fetch users for chat
│
├── js/
│   ├── chat.js            # Chat AJAX logic
│   ├── login.js           # Login AJAX logic
│   ├── pass-show-hide.js  # Password show/hide
│   ├── signup.js          # Signup AJAX logic
│   ├── user.js            # User search logic
│   ├── users.js           # User list AJAX update
│   └── search-bar.js      # Search bar UI logic
│
├── style/
│   └── style-php.css      # Main stylesheet
│
└── README.md
```

## Setup Instructions
1. **Clone or copy the project to your XAMPP/htdocs directory.**
2. **Create a MySQL database named `chat`.**
3. **Import your users and messages tables into the `chat` database.**
4. **Update database credentials in `html/php/config.php` if needed.**
5. **Start Apache and MySQL from XAMPP.**
6. **Open `http://localhost/php_project/html/index.php` in your browser.**

## Usage
- Register a new account or log in with an existing one.
- Upload a profile image during signup.
- Search for users and start chatting in real time.
- Log out to set your status as offline.

## Notes
- All user images are stored in `html/images/`.
- User status is updated automatically on login/logout.
- AJAX is used for real-time updates without page reloads.

## License
This project is for educational purposes only.
