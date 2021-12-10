const { add } = require("../src/add.fn");

describe("Add function tests", function () {
  it("should return zero when input is empty", function () {
    const result = add("");
    expect(result).toBe(0);
  });

  it("should return a number when a single number string is given", function () {
    const result = add("1");
    expect(result).toBe(1);
  });

  it("should return the sum of two numbers with the default separator", function () {
    const result = add("1,2");
    expect(result).toBe(3);
  });
});
