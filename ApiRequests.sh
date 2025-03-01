#!/bin/bash

# Base URL of your API
BASE_URL="http://localhost:8000/api"

# Test User Registration
echo "Testing User Registration..."
curl -X POST "$BASE_URL/register" \
     -H "Content-Type: application/json" \
     -d '{
           "first_name": "John",
           "last_name": "Doe",
           "email": "john.doe@example.com",
           "password": "password"
         }'
echo -e "\n\n"

# Test User Login
echo "Testing User Login..."
LOGIN_RESPONSE=$(curl -s -X POST "$BASE_URL/login" \
                      -H "Content-Type: application/json" \
                      -d '{
                            "email": "john.doe@example.com",
                            "password": "password"
                          }')
echo "$LOGIN_RESPONSE"
echo -e "\n\n"

# Extract the token from the login response
TOKEN=$(echo "$LOGIN_RESPONSE" | jq -r '.token')

# Test Create Project
echo "Testing Create Project..."
curl -X POST "$BASE_URL/projects" \
     -H "Content-Type: application/json" \
     -H "Authorization: Bearer $TOKEN" \
     -d '{
           "name": "Project A",
           "status": "active",
           "attributes": [
             {
               "attribute_id": 1,
               "value": "IT"
             }
           ]
         }'
echo -e "\n\n"

# Test Get All Projects
echo "Testing Get All Projects..."
curl -X GET "$BASE_URL/projects" \
     -H "Authorization: Bearer $TOKEN"
echo -e "\n\n"

# Test Create Timesheet
echo "Testing Create Timesheet..."
curl -X POST "$BASE_URL/timesheets" \
     -H "Content-Type: application/json" \
     -H "Authorization: Bearer $TOKEN" \
     -d '{
           "task_name": "Design UI",
           "date": "2023-10-01",
           "hours": 5,
           "user_id": 1,
           "project_id": 1
         }'
echo -e "\n\n"

# Test Get All Timesheets
echo "Testing Get All Timesheets..."
curl -X GET "$BASE_URL/timesheets" \
     -H "Authorization: Bearer $TOKEN"
echo -e "\n\n"

# Test Filter Projects by Name
echo "Testing Filter Projects by Name..."
curl -X GET "$BASE_URL/projects?filters[name]=ProjectA" \
     -H "Authorization: Bearer $TOKEN"
echo -e "\n\n"

# Test Filter Projects by Dynamic Attribute
echo "Testing Filter Projects by Dynamic Attribute..."
curl -X GET "$BASE_URL/projects?attributes[department]=IT" \
     -H "Authorization: Bearer $TOKEN"
echo -e "\n\n"

# Test Logout
echo "Testing Logout..."
curl -X POST "$BASE_URL/logout" \
     -H "Authorization: Bearer $TOKEN"
echo -e "\n\n"