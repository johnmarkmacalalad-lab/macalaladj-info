<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information | <?= htmlspecialchars($student['name']); ?></title>
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
            color: #7ce88a;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .status::before {
            content: '';
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #7ce88a;
            box-shadow: 0 0 8px #7ce88a;
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
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            border-bottom: 1px solid #3a1e5c;
            padding-bottom: 14px;
        }
        table { width: 100%; border-collapse: collapse; }
        table td {
            padding: 11px 6px;
            border-bottom: 1px solid #241243;
            font-size: 14px;
            color: #ded4ea;
        }
        table tr:last-child td {
            border-bottom: none;
        }
        table td.label {
            font-weight: 600;
            color: #a855f7;
            width: 38%;
            white-space: nowrap;
        }
        table td.label::before {
            content: '> ';
            color: #5b2f8c;
        }
        .section-label {
            color: #8a6ab0;
            font-size: 11px;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }
        nav {
            margin-top: 26px;
            display: flex;
            gap: 12px;
        }
        nav a {
            flex: 1;
            display: block;
            text-align: center;
            padding: 12px 16px;
            background: #1c0e30;
            border: 1px solid #3a1e5c;
            border-radius: 8px;
            color: #f0e9f7;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: border-color 0.2s, background 0.2s;
        }
        nav a:hover {
            border-color: #a855f7;
            background: #241243;
        }
        nav a.revoke {
            color: #d8a3ff;
        }
        nav a.revoke:hover {
            border-color: #a855f7;
        }
    </style>
</head>
<body>
    <div class="terminal">
        <div class="titlebar">
            <span class="dot red"></span>
            <span class="dot yellow"></span>
            <span class="dot green"></span>
            <span>student-profile@lavalust:~</span>
        </div>
        <div class="body">
            <div class="prompt-line">
                <span class="path">student@lavalust:~/portal/profile$</span>
                <span class="status">ACCESS GRANTED</span>
            </div>

            <div class="eyebrow">// Unlocked by StudentMiddleware</div>
            <h1>Student Information</h1>

            <table>
                <tr><td class="label">Student ID</td><td><?= htmlspecialchars($student['student_id']); ?></td></tr>
                <tr><td class="label">Name</td><td><?= htmlspecialchars($student['name']); ?></td></tr>
                <tr><td class="label">Course</td><td><?= htmlspecialchars($student['course']); ?></td></tr>
                <tr><td class="label">Year Level</td><td><?= htmlspecialchars($student['year']); ?></td></tr>
                <tr><td class="label">Section</td><td><?= htmlspecialchars($student['section']); ?></td></tr>
                <tr><td class="label">Email</td><td><?= htmlspecialchars($student['email']); ?></td></tr>
                <tr><td class="label">Address</td><td><?= htmlspecialchars($student['address']); ?></td></tr>
                <tr><td class="label">Contact No.</td><td><?= htmlspecialchars($student['contact_no']); ?></td></tr>
                <tr><td class="label">Hobbies</td><td><?= htmlspecialchars($student['hobbies']); ?></td></tr>
                <tr><td class="label">About</td><td><?= htmlspecialchars($student['description']); ?></td></tr>
            </table>

            <nav>
                <a href="<?= site_url('student'); ?>">Home</a>
                <a class="revoke" href="<?= site_url('student/logout'); ?>">Denied Access</a>
            </nav>
        </div>
    </div>
</body>
</html>
