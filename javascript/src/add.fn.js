const add = (input) => {
  if (input === "") return 0;
  const separators = [",", "\n"];
  const regex = new RegExp(`[${separators.join("")}]`);
  return input
    .split(regex)
    .map((number) => parseInt(number))
    .reduce((acc, curr) => acc + curr, 0);
};

module.exports = { add };
