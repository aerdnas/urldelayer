#!/bin/sh

timeout 1 curl -X GET  https://urldelayer.herokuapp.com/index.php?k=[your_key_here]
sudo shutdown now
