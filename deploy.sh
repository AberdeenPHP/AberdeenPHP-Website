#!/bin/bash

# Trigger deployment
# Replace the url below with your Forge/Laravel url
curl -s "${FORGE_DEPLOY_TRIGGER}";
echo "Deployment triggered!"