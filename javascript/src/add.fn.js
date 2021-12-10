const add = (input) => {
  if (input === "") return 0;
  const numbers = input.split(",");
  if (numbers.length === 1) {
    return parseInt(input);
  }
  if (numbers.length === 2) {
    return parseInt(numbers[0]) + parseInt(numbers[1]);
  }
  if (numbers.length === 3) {
    return parseInt(numbers[0]) + parseInt(numbers[1]) + parseInt(numbers[2]);
  }
};

module.exports = { add };
