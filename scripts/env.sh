printf "attempting to copy local losys .env\n"
test -f ~/.config/losys/.env && ! test -f .env && cp ~/.config/losys/.env .env
printf "done! losys .env copied\n"
