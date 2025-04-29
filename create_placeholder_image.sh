#!/bin/bash

# Check if two arguments are given
if [ "$#" -ne 2 ]; then
  echo "Usage: $0 target_image destination_image"
  exit 1
fi

# Assign arguments to variables
TARGET="$1"
DESTINATION="$2"

# Create output directory if it doesn't exist
OUTPUT_DIR="output"
mkdir -p "$OUTPUT_DIR"

# Modify destination path to include output directory
DESTINATION_PATH="$OUTPUT_DIR/$DESTINATION"

# Run ffmpeg command
ffmpeg -i "$TARGET" -vf scale=20:-1 "$DESTINATION_PATH"
