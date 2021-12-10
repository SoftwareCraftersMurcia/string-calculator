const add = (input) => {
  if (input === "") return 0;
  return input
    .split(",")
    .map((number) => parseInt(number))
    .reduce((acc, curr) => acc + curr, 0);
};

module.exports = { add };
