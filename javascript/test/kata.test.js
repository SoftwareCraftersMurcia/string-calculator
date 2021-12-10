const { add } = require("../src/add.fn");

describe("Add function tests", function () {
  it("should return zero when input is empty", function () {
    var result = add("");
    expect(result).toBe(0);
  });
});
