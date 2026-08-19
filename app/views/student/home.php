<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home | <?= htmlspecialchars($student['name']); ?></title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Courier New', 'Consolas', monospace;
            background: #0d0616;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .terminal {
            background: #150a24;
            border: 1px solid #3a1e5c;
            border-radius: 10px;
            max-width: 560px;
            width: 100%;
            box-shadow: 0 20px 50px rgba(168, 85, 247, 0.15);
            overflow: hidden;
        }
        .titlebar {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 16px;
            background: #1c0e30;
            border-bottom: 1px solid #3a1e5c;
        }
        .dot { width: 12px; height: 12px; border-radius: 50%; }
        .dot.red { background: #ff5f56; }
        .dot.yellow { background: #ffbd2e; }
        .dot.green { background: #27c93f; }
        .titlebar span {
            margin-left: 8px;
            color: #9080b0;
            font-size: 13px;
        }
        .body {
            padding: 28px;
        }
        .prompt-line {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            font-size: 13px;
        }
        .prompt-line .path { color: #a855f7; }
        .status {
            color: #a855f7;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .status::before {
            content: '';
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #a855f7;
            box-shadow: 0 0 8px #a855f7;
        }
        .eyebrow {
            color: #8a6ab0;
            font-size: 11px;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 6px;
        }
        h1 {
            color: #f0e9f7;
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 6px;
        }
        h1 .name { color: #a855f7; }
        p.sub {
            color: #a992c4;
            font-size: 14px;
            margin-bottom: 26px;
        }
        .section-label {
            color: #8a6ab0;
            font-size: 11px;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }
        nav {
            display: flex;
            gap: 12px;
            margin-bottom: 26px;
        }
        nav a {
            flex: 1;
            display: block;
            padding: 14px 16px;
            background: #1c0e30;
            border: 1px solid #3a1e5c;
            border-radius: 8px;
            color: #f0e9f7;
            text-decoration: none;
            transition: border-color 0.2s, background 0.2s;
        }
        nav a:hover {
            border-color: #a855f7;
            background: #241243;
        }
        nav a .tag {
            display: inline-block;
            color: #a855f7;
            font-size: 11px;
            border: 1px solid #5b2f8c;
            border-radius: 4px;
            padding: 1px 6px;
            margin-bottom: 8px;
        }
        nav a .label {
            font-weight: 600;
            font-size: 15px;
            display: block;
        }
        nav a .desc {
            color: #8a6ab0;
            font-size: 12px;
            margin-top: 2px;
        }
        .note {
            border-left: 3px solid #a855f7;
            background: #1c0e30;
            border-radius: 0 8px 8px 0;
            padding: 16px 18px;
            font-size: 13px;
            line-height: 1.6;
        }
        .note strong { color: #f0e9f7; }
        .note .tag-label {
            color: #f0e9f7;
            font-weight: 700;
            display: block;
            margin-bottom: 8px;
        }
        .note .flag {
            color: #a855f7;
            font-weight: 600;
        }
        .note a {
            color: #a855f7;
        }
        .note code {
            display: block;
            margin-top: 10px;
            color: #a855f7;
        }
        .note code::before {
            content: '> ';
            color: #8a6ab0;
        }
    </style>
</head>
<body>
    <div class="terminal">
        <div class="titlebar">
            <span class="dot red"></span>
            <span class="dot yellow"></span>
            <span class="dot green"></span>
            <span>student-home@lavalust:~</span>
        </div>
        <div class="body">
            <div class="prompt-line">
                <span class="path">student@lavalust:~/portal$</span>
                <span class="status">SYSTEM ONLINE</span>
            </div>

            <div class="eyebrow">Authenticated User</div>
            <h1>Hello, <span class="name"><?= htmlspecialchars($student['name']); ?></span>!</h1>
            <p class="sub">Welcome to your student control panel.</p>

            <div class="section-label">// Available Modules</div>
            <nav>
                <a href="<?= site_url('student'); ?>">
                    <span class="tag">~/</span>
                    <span class="label">Home</span>
                    <span class="desc">dashboard</span>
                </a>
                <a href="<?= site_url('student/profile'); ?>">
                    <span class="tag">ID</span>
                    <span class="label">Student Profile</span>
                    <span class="desc">personal_data</span>
                </a>
            </nav>

            <div class="section-label">// Security Status</div>
            <div class="note">
                <span class="tag-label">StudentMiddleware Protected</span>
                <span class="flag">[SECURITY]</span> The Student Profile page is protected by <strong>StudentMiddleware</strong>.<br>
                <span class="flag">[ACCESS]</span> If you haven't unlocked access yet, execute:
                <code><a href="<?= site_url('student/access'); ?>">grant_student_access()</a></code>
            </div>
        </div>
    </div>
</body>
</html>