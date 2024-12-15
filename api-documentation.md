# API Documentation

## Base URL:
`/api/v1`

---

## 1. Create Team

**Endpoint:** `POST /teams`

**Description:** Creates a new team by providing the team name, team leader's email, and associated event ID.

### Request Body:
```json
{
    "team_name": "Team Alpha",
    "team_leader_email": "leader@example.com",
    "event_id": 1
}

Response:
Success (201 Created):

json
Copy code
{
    "message": "Team successfully created.",
    "team_id": 5
}
Error (404 Not Found):

json
Copy code
{
    "message": "Team leader not found with the provided email."
}

## 2. Check Team Existence by Name

Endpoint: GET /teams/check/{name}

Description: Checks if a team exists by its name.

Parameters:
name (string) - The name of the team to check.
Response:
Success (200 OK):

json
Copy code
{
    "message": "The team exists.",
    "team_id": 5,
    "team_name": "Team Alpha"
}
Error (404 Not Found):

json
Copy code
{
    "message": "The team does not exist."
}

## 3. Create Registration

Endpoint: POST /registrations

Description: Registers a user for an event and associates them with a team. If the user doesn't exist, they are created. Duplicate registrations are prevented.

Request Body:
{
    "name": "John Doe",
    "email": "john.doe@example.com",
    "phone_number": "1234567890",
    "linkedin": "https://linkedin.com/johndoe",
    "github": "https://github.com/johndoe",
    "other": "https://portfolio.com",
    "team_id": 1,
    "event_id": 1
}

Response:
Success (201 Created):

json
Copy code
{
    "message": "Registration successfully created.",
    "registration": {
        "id": 1,
        "user_id": 2,
        "team_id": 1,
        "event_id": 1,
        "registered_at": "2024-12-15T14:55:00"
    }
}
Error (409 Conflict):

json
Copy code
{
    "message": "The user is already registered for this event under the selected team."
}

## 4. Get All Teams with Leader and Members
Endpoint: GET /teams

Description: Fetches all teams along with their leaders and members.

Response:
Success (200 OK):
json
Copy code
[
    {
        "id": 1,
        "teamName": "Team Alpha",
        "teamLeader": {
            "id": 1,
            "name": "Leader Name"
        },
        "members": [
            {
                "user": {
                    "id": 2,
                    "name": "Member Name"
                }
            }
        ]
    }
]