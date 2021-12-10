const LEFT_CUSTOM_DELIMITER = "//";
const add = (input) => {
  if (input === "") return 0;
  const separators = [",", "\n"];
  if (input.startsWith(LEFT_CUSTOM_DELIMITER)) {
    separators.push(input[2]);
    input = input.substring(4, input.length);
  }
  const regex = new RegExp(`[${separators.join("")}]`);
  return input
    .split(regex)
    .map((number) => parseInt(number))
    .reduce((acc, curr) => acc + curr, 0);
};

module.exports = { add };
