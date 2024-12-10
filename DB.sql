-- this is the data base with the names of the events seperated 
CREATE DATABASE registration_system;

USE registration_system;

 -- DEV FEST
-- Users Table
CREATE TABLE users_Dev_fest (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone_number VARCHAR(15),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Teams Table
CREATE TABLE teams_Dev_fest (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id VARCHAR(10) UNIQUE NOT NULL,
    team_name VARCHAR(100),
    team_leader_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (team_leader_id) REFERENCES users_Dev_fest(id) ON DELETE CASCADE
);

-- Registrations Table
CREATE TABLE registrations_Dev_fest (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    team_id INT DEFAULT NULL,
    event_name VARCHAR(100),
    registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users_Dev_fest(id) ON DELETE CASCADE,
    FOREIGN KEY (team_id) REFERENCES teams_Dev_fest(id) ON DELETE SET NULL
);

-- Accepted Teams Table
CREATE TABLE accepted_teams_Dev_fest (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id INT NOT NULL,
    accepted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (team_id) REFERENCES teams_Dev_fest(id) ON DELETE CASCADE
);
-- Admins Table
CREATE TABLE admins_Dev_fest (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    role ENUM('admin', 'superadmin') DEFAULT 'admin',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users_Dev_fest(id) ON DELETE CASCADE
);


 -- GDG HACK
-- Users Table
CREATE TABLE users_GDG_Hack (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone_number VARCHAR(15),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Teams Table
CREATE TABLE teams_GDG_Hack (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id VARCHAR(10) UNIQUE NOT NULL,
    team_name VARCHAR(100),
    team_leader_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (team_leader_id) REFERENCES users_GDG_Hack(id) ON DELETE CASCADE
);

-- Registrations Table
CREATE TABLE registrations_GDG_Hack (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    team_id INT DEFAULT NULL,
    event_name VARCHAR(100),
    registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users_GDG_Hack(id) ON DELETE CASCADE,
    FOREIGN KEY (team_id) REFERENCES teams_GDG_Hack(id) ON DELETE SET NULL
);

-- Accepted Teams Table
CREATE TABLE accepted_teams_GDG_Hack (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id INT NOT NULL,
    accepted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (team_id) REFERENCES teams_GDG_Hack(id) ON DELETE CASCADE
);
-- Admins Table
CREATE TABLE admins_GDG_Hack (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    role ENUM('admin', 'superadmin') DEFAULT 'admin',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users_GDG_Hack(id) ON DELETE CASCADE
);



 -- G Hack Algeirs
-- Users Table
CREATE TABLE users_GHack (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone_number VARCHAR(15),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Teams Table
CREATE TABLE teams_GHack (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id VARCHAR(10) UNIQUE NOT NULL,
    team_name VARCHAR(100),
    team_leader_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (team_leader_id) REFERENCES users_GHack(id) ON DELETE CASCADE
);

-- Registrations Table
CREATE TABLE registrations_GHack (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    team_id INT DEFAULT NULL,
    event_name VARCHAR(100),
    registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users_GHack(id) ON DELETE CASCADE,
    FOREIGN KEY (team_id) REFERENCES teams_GHack(id) ON DELETE SET NULL
);

-- Accepted Teams Table
CREATE TABLE accepted_teams_GHack (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id INT NOT NULL,
    accepted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (team_id) REFERENCES teams_GHack(id) ON DELETE CASCADE
);
-- Admins Table
CREATE TABLE admins_GHack (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    role ENUM('admin', 'superadmin') DEFAULT 'admin',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users_GHack(id) ON DELETE CASCADE
);



 -- GDG Algeirs CTF
-- Users Table
CREATE TABLE users_GDG_CTF (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone_number VARCHAR(15),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Teams Table
CREATE TABLE teams_GDG_CTF (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id VARCHAR(10) UNIQUE NOT NULL,
    team_name VARCHAR(100),
    team_leader_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (team_leader_id) REFERENCES users_GDG_CTF(id) ON DELETE CASCADE
);

-- Registrations Table
CREATE TABLE registrations_GDG_CTF (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    team_id INT DEFAULT NULL,
    event_name VARCHAR(100),
    registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users_GDG_CTF(id) ON DELETE CASCADE,
    FOREIGN KEY (team_id) REFERENCES teams_GDG_CTF(id) ON DELETE SET NULL
);

-- Accepted Teams Table
CREATE TABLE accepted_teams_GDG_CTF (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id INT NOT NULL,
    accepted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (team_id) REFERENCES teams_GDG_CTF(id) ON DELETE CASCADE
);
-- Admins Table
CREATE TABLE admins_GDG_CTF (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    role ENUM('admin', 'superadmin') DEFAULT 'admin',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users_GDG_CTF(id) ON DELETE CASCADE
);



 -- Hash Code
-- Users Table
CREATE TABLE users_HashCode (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone_number VARCHAR(15),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Teams Table
CREATE TABLE teams_HashCode (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id VARCHAR(10) UNIQUE NOT NULL,
    team_name VARCHAR(100),
    team_leader_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (team_leader_id) REFERENCES users_HashCode(id) ON DELETE CASCADE
);

-- Registrations Table
CREATE TABLE registrations_HashCode (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    team_id INT DEFAULT NULL,
    event_name VARCHAR(100),
    registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users_HashCode(id) ON DELETE CASCADE,
    FOREIGN KEY (team_id) REFERENCES teams_HashCode(id) ON DELETE SET NULL
);

-- Accepted Teams Table
CREATE TABLE accepted_teams_HashCode (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_id INT NOT NULL,
    accepted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (team_id) REFERENCES teams_HashCode(id) ON DELETE CASCADE
);
-- Admins Table
CREATE TABLE admins_HashCode(
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    role ENUM('admin', 'superadmin') DEFAULT 'admin',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users_HashCode(id) ON DELETE CASCADE
);


