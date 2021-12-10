const add = (input) => {
  if (input === "") return 0;
  const numbers = input.split(",");
  if (numbers.length === 1) {
    return parseInt(input);
  }
  return parseInt(numbers[0]) + parseInt(numbers[1]);

};

module.exports = { add };
